<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;
use App\Models\Payment;

class AdminController extends Controller
{
    public function dashboard()
    {
        $clients = Client::count();
        $projects = Project::count();
        $payments = Payment::sum('amount');
        $pending = Payment::where('status', 'pending')->sum('amount');

        return view('dashboard', compact('clients','projects','payments','pending'));
    }
}
