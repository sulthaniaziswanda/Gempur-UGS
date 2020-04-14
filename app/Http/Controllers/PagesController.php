<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('sites.home');
    }

    public function about(){
        return view('sites.about');
    }
}
