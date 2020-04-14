<?php

namespace App\Http\Controllers;
use App\Donation;
use Illuminate\Http\Request;

class GempurController extends Controller
{
    public function gempur(Request $request, Donation $donation){
        if($request->has('cari')){
            $donations = Donation::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
        $donations = Donation::all();
        }
        return view('sites.gempur', compact('donations'), compact('donation'));
    }
}
