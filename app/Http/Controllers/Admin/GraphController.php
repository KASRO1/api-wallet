<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpMyAdmin\Server\Status;

class GraphController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $this->validate($request,
            [
               'open' => ['required','numeric'],
                'close' => ['required', 'numeric'],
                'start_time' => 'required',
                'duration' => ['required', 'numeric', 'min:1'],
                'user_id' => 'required',
            ]
        );

        $arrayGraph = $this->buildGraph([
            'open' =>$data['open']*100,
            'close' => $data['close']*100
        ], [
            'start' => strtotime($data['start_time']),
            'end' => strtotime($data['start_time'] . ' +' . $data['duration'] . ' days'),
            'duration' => $data['duration']
        ]);

        for ($i = 0; $i < sizeof($arrayGraph); $i++){
            $arrayGraph[$i]['user_id'] = $data['user_id'] == -1 ? null : $data['user_id'];
        }

        $this->insert($arrayGraph);
        return redirect()->back()->with('success',true);
    }

    public function showPage(){
        $user = auth()->user();
        $users = User::all();
        return view('admin.tracking',compact('user','users'));
    }

    public function changeCandle(Request $request){
        $data = $this->validate($request,
        [
           'open'=>['required', 'numeric'],
           'close'=>['required', 'numeric'],
           'low'=>['required', 'numeric'],
           'high'=>['required', 'numeric'],
            'user_id'=>'required',
            'time'=>['required']
        ]);

        $data['open'] = $data['open'] * 100;
        $data['close'] = $data['close'] * 100;
        $data['low'] = $data['low'] * 100;
        $data['high'] = $data['high'] * 100;

        $time = date('Y-m-d H:i:s',strtotime($data['time'] . ' + 2 hours'));
        //dd($time);
        unset($data['time']);

        if (DB::table('tracking_items')->where('datetime',$time)->exists()){
            $data['user_id'] = $data['user_id'] == -1 ? null :$data['user_id'];

            DB::table('tracking_items')->where('datetime',$time)->update($data);
            return redirect()->back()->with('success',true);
        }else{
            return redirect()->back()->with('error','Свечи не существует');
        }

    }

    function destroy(Request $request){
        DB::table('tracking_items')->delete();
        return back()->with('success', true);
    }

    /**
     * Main function to build graph data
     *
     * @param $priceData array ['open','close'] starting price, ending price
     * @param $timeData array  start & end timestamps
     * @return array array of candles with timestamps
     */
    private function buildGraph($priceData, $timeData)
    {
        //by default making 2h candles
        //TODO: make custom candle timeframes

        $iters = abs(ceil(($timeData['start'] - $timeData['end'])/(60*60 * 12)));



        echo $iters . '<br>';
        //echo date('Y-m-d',$timeData['start']) . ' -start<br>';
        //echo date('Y-m-d',$timeData['end']) . ' -end<br>';
        //echo $timeData['duration'] . '- duration<br>';

        $candlesMovement = $this->calculateCandlesPrices($priceData, $timeData['duration']);


        $candlesData = [];
        for ($i = 0; $i < count($candlesMovement); $i++){

            $candlesData = array_merge($candlesData, $this->calculateCandlesPrices($candlesMovement[$i], $iters));
        }

        for ($i = 0; $i < count($candlesData); $i++){
            echo $i . '<br>';
            $candlesData[$i]['datetime'] = date('Y-m-d G:i:s', $timeData['start'] + (($i + 1) * 3600 * 2));
        }

        return $candlesData;
    }

    /**
     *
     * @param $data array ['open','close']
     * @param $iterations int how many candles to generate
     *
     * @return array
     * */
    private function calculateCandlesPrices($data, $iterations){
        $openStart = $data['open'];
        $closeFinish = $data['close'];

        $avr = abs(($openStart - $closeFinish)/2);

        $graphsData = [];


        for($i = 0; $i < $iterations; $i++)
        {
            if($i == 0)
            {
                $open = $openStart;
                $close = rand(1, $open + $avr);
            }
            else if($i < $iterations - 1)
            {
                $open = $graphsData[$i-1]['close'];
                $close = rand(1, $open + $avr);

            }else{
                $open = $graphsData[$i-1]['close'];
                $close = $closeFinish;
            }

            //peaks are < candle / 2 from candle body
            $candleSize = $close > $open ? $close - $open : $open - $close;
            $peaksMaxSize = $candleSize / 2;


            $high = $close > $open ? rand($close, $close + $peaksMaxSize) : rand($open, $open + $peaksMaxSize);
            $s = $close > $open ? $close : $open;
            $low = $close > $open ?
                rand($open - $peaksMaxSize > 0 ? $open - $peaksMaxSize:1, $open)
                : rand($close - $peaksMaxSize > 0 ? $close - $peaksMaxSize:1, $close);

            $candle =  [
                'open' => $open,
                'close' => $close,
                'high' => $high,
                'low' => $low
            ];
            array_push($graphsData, $candle);
        }

        return $graphsData;
    }

    private function insert($arrayGraph)
    {
        foreach ($arrayGraph as $candle)
        {
            DB::table('tracking_items')->insert($candle);
        }
    }

}
