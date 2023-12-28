<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageUploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $image = $request->file('upload')->store('public/uploads');
        $image = Str::replaceFirst('public/', 'storage/', $image);

        return response()->json([
            'uploaded' => true,
            'url' => asset($image),
        ]);
    }
}
