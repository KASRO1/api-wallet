<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notification;
use App\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * @param User $user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(User $user, Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'text' => ['required', 'string'],
        ]);

        $user->notifications()->create($data);

        return back()->with('success', true);
    }

    /**
     * @param Notification $notification
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();

        return back()->with('success', true);
    }
}
