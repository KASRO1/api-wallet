<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class VerificationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function show()
    {
        $user = auth()->user();

        $isVerified = $user->is_verified;
        $accounts = $user->accounts;

        return view('cabinet.verification', compact('user', 'isVerified', 'accounts'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'passportMainPage' => ['required', 'file', 'image', 'max:10240'],
            'passportLastPage' => ['required', 'file', 'image', 'max:10240'],
            'passportFace' => ['required', 'file', 'image', 'max:10240'],
        ]);

        /** @var UploadedFile[] $data */
        $data['passportMainPage'] = $data['passportMainPage']->store('public/documents');
        $data['passportLastPage'] = $data['passportLastPage']->store('public/documents');
        $data['passportFace'] = $data['passportFace']->store('public/documents');

        $data['passportMainPage'] = Str::replaceFirst('public/', 'storage/', $data['passportMainPage']);
        $data['passportLastPage'] = Str::replaceFirst('public/', 'storage/', $data['passportLastPage']);
        $data['passportFace'] = Str::replaceFirst('public/', 'storage/', $data['passportFace']);

        $user = auth()->user();

        $user->update([
            'passport_page_first' => $data['passportMainPage'],
            'passport_page_second' => $data['passportLastPage'],
            'passport_face' => $data['passportFace'],
            'is_verified' => 1,
        ]);

        return back();
    }
}
