<?php

namespace App\Http\Controllers\Dashboard;

use App\Activities;
use App\Client;
use App\contact;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class DashboardController extends Controller
{

    public function index()
    {
        $users = User::all();
        $activities = Activities::all();
        $clients = Client::all();
        $contacts = contact::all();
        $projects = Project::all();

        return view('dashboard.index', compact('activities', 'users','clients','contacts','projects'));
    }
}
