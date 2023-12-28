@extends('layouts.cabinet')

@section('title', 'Криптотрекинг')

@section('content')
@include('cabinet.new._header', ['user'=>$user])

<style>
    #chart {
        width: 100%;
        height: 500px;
    }
</style>
@if($user->special_product)
<div class="container">
    <div class="row">
        <div class="col-12">
            <main class="flex flex-column flex-grow trans-0-3">
                <div data-v-e4d5b16a="" class="grid padding-x-3 padding-y-0 padding-top-0 shadowed border-rounded-3 bg-white margin-x-3 margin-top-0">

                    <ul class="errors rid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <div class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
                        @csrf
                        <div data-v-e4d5b16a="">
                            <div data-v-e4d5b16a="" class="margin-y-0 font-sm"> {{__("tracking_info1")}}<br /><br />
                                <div data-v-e4d5b16a="" class="color-gray text-tight"> {{__("tracking_info2")}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-column-12">
                        <div id="chart"></div>
                    </div>
                </div>
            </main>

            <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
            <script>
                am5.ready(function() {
                    let root = am5.Root.new('chart');
                    root.setThemes([
                        am5themes_Animated.new(root)
                    ]);

                    let trackingValues = '{{$trackingValues}}'.split(',').map(i => parseFloat(i));
                    let trackingHigh = '{{$trackingHigh}}'.split(',').map(i => parseFloat(i));
                    let trackingLow = '{{$trackingLow}}'.split(',').map(i => parseFloat(i));
                    let trackingOpen = '{{$trackingOpen}}'.split(',').map(i => parseFloat(i));
                    let trackingDates = '{{$trackingDates}}'.split(';').map(i => new Date(+i))

                    let data = []

                    for (let i = 0; i < trackingValues.length; i++) {
                        data.push({
                            date: trackingDates[i].getTime(),
                            high: trackingHigh[i],
                            low: trackingLow[i],
                            open: trackingOpen[i],
                            value: trackingValues[i]
                        })

                    }

                    console.log(data)
                    let chart = root.container.children.push(
                        am5xy.XYChart.new(root, {
                            focusable: false,
                            panX: true,
                            panY: false,
                            wheelX: "panX",
                            wheelY: "zoomX"
                        })
                    );

                    let xAxis = chart.xAxes.push(
                        am5xy.DateAxis.new(root, {
                            groupData: false,
                            maxDeviation: 10,
                            maxZoomCount: 200,
                            baseInterval: {
                                timeUnit: "hour",
                                count: 2
                            },
                            gridIntervals: [{
                                    timeUnit: "hour",
                                    count: 4
                                },
                                {
                                    timeUnit: "day",
                                    count: 1
                                },
                                {
                                    timeUnit: "day",
                                    count: 2
                                },
                                {
                                    timeUnit: "month",
                                    count: 1
                                }
                            ],
                            renderer: am5xy.AxisRendererX.new(root, {
                                pan: "zoom"
                            }),
                            tooltip: am5.Tooltip.new(root, {})
                        })
                    )

                    let yAxis = chart.yAxes.push(
                        am5xy.ValueAxis.new(root, {
                            maxDeviation: 1,
                            renderer: am5xy.AxisRendererY.new(root, {
                                pan: "zoom"
                            })
                        })
                    )

                    let color = root.interfaceColors.get('background');

                    var series = chart.series.push(
                        am5xy.CandlestickSeries.new(root, {
                            fill: color,
                            calculateAggregates: true,
                            stroke: color,
                            name: "INFO",
                            xAxis: xAxis,
                            yAxis: yAxis,
                            valueYField: "value",
                            openValueYField: "open",
                            lowValueYField: "low",
                            highValueYField: "high",
                            valueXField: "date",
                            lowValueYGrouped: "low",
                            highValueYGrouped: "high",
                            openValueYGrouped: "open",
                            valueYGrouped: "close",
                            legendValueText: "open: {openValueY} low: {lowValueY} high: {highValueY} close: {valueY}",
                            legendRangeValueText: "{valueYClose}",
                            tooltip: am5.Tooltip.new(root, {
                                pointerOrientation: "horizontal",
                                labelText: "open: {openValueY}\nlow: {lowValueY}\nhigh: {highValueY}\nclose: {valueY}"
                            })
                        })
                    );


                    let cursor = chart.set(
                        'cursor',
                        am5xy.XYCursor.new(root, {
                            xAxis: xAxis
                        })
                    )

                    cursor.lineY.set('visible', false);
                    chart.leftAxesContainer.set("layout", root.verticalLayout);
                    let scrollbar = am5xy.XYChartScrollbar.new(root, {
                        orientation: "horizontal",
                        height: 50
                    });
                    chart.set("scrollbarX", scrollbar);

                    let sbxAxis = scrollbar.chart.xAxes.push(
                        am5xy.DateAxis.new(root, {
                            groupData: true,
                            groupIntervals: [{
                                timeUnit: "week",
                                count: 1
                            }],
                            baseInterval: {
                                timeUnit: "day",
                                count: 1
                            },
                            renderer: am5xy.AxisRendererX.new(root, {
                                opposite: false,
                                strokeOpacity: 0
                            })
                        })
                    );

                    let sbyAxis = scrollbar.chart.yAxes.push(
                        am5xy.ValueAxis.new(root, {
                            renderer: am5xy.AxisRendererY.new(root, {})
                        })
                    );

                    let sbseries = scrollbar.chart.series.push(
                        am5xy.LineSeries.new(root, {
                            xAxis: sbxAxis,
                            yAxis: sbyAxis,
                            valueYField: "value",
                            valueXField: "date"
                        })
                    );

                    let legend = yAxis.axisHeader.children.push(am5.Legend.new(root, {}))

                    legend.data.push(series)

                    legend.markers.template.setAll({
                        width: 10
                    })

                    legend.markerRectangles.template.setAll({
                        cornerRadiusTR: 0,
                        cornerRadiusBR: 0,
                        cornerRadiusTL: 0,
                        cornerRadiusBL: 0
                    })


                    series.data.setAll(data)
                    sbseries.data.setAll(data);

                    series.appear(1000)
                    chart.appear(1000, 100)
                });
            </script>
        </div>
    </div>
</div>
@endif
@endsection