<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class NotificationController extends Controller
{
    public function index()
    {
        return view('pwa.page.notification');
    }

    public function notification(Request $request)
    {
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = [
            'title' => $request->title,
            'content' => $request->content

        ];
        $pusher->trigger('notify-channel', 'App\\Events\\NotificationPusherEvent', $data);

        return redirect()->back();
    }

    public function create()
    {
        return view('pwa.page.notification-pusher');
    }
}
