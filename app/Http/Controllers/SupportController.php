<?php

namespace App\Http\Controllers;

use App\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'topic' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ]);
        
        Support::create($data);
        return back()->with('success', true);
        // $content = @file_get_contents(storage_path('support_messages.txt')) ?? "";

        // $now = now()->toDateTimeString();

        // $content .= "\nTime: [{$now}]\nName: [{$request->get('name')}]\nEmail: [{$request->get('email')}]\nMessage: [{$request->get('message')}]\n";

        // file_put_contents(storage_path('support_messages.txt'), $content);

        // return back()->with('success', true);
    }
}
