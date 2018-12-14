<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class topbarController extends Controller
{
    public function index()
    {
//        $events = [];
        $users = User::all();
//        if($data->count()) {
//            foreach ($data as $key => $value) {
//                $events[] = Calendar::event(
//                    $value->activity,
//                    false,
//                    new \DateTime($value->deadline),
//                    new \DateTime($value->deadline.' +1 day'),
//                    null,
//                    // Add color and link on event
//                    [
//                        'color' => '#4fb7fe',
//                        'url' => 'pass here url and any route',
//                    ]
//                );
//            }
//        }
//        $calendar = Calendar::addEvents($events);
        return view('dashboard.partials.topbar', compact('users'));
    }
}
