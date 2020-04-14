<?php

namespace App\Http\Controllers;
use App\Donation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Donation $donation){
        $donations = Donation::all();
        return view('dashboards.index', compact('donation'));
    }
}
