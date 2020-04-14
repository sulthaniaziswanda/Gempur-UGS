<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Exports\DonationsExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Http\Request; 

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $donations = Donation::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $donations = Donation::all();
        }
        return view('donations.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama'      => 'required',
            'jumlah'    => 'required'
        ]);

        donation::create($request->all());
        return redirect('/donations')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        return view('donations.show', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        return view('donations.edit', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        $request -> validate([
            'nama'      => 'required',
            'jumlah'    => 'required'
        ]);

        donation::where('id', $donation->id)
                ->update([
                    'nama'      => $request->nama,
                    'tanggal'   => $request->tanggal,
                    'jumlah'    => $request->jumlah,
                ]);
                return redirect('/donations')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        Donation::destroy($donation->id);
        return redirect('/donations')->with('status', 'Data Berhasil Dihapus');
    }

    // Export Excel
    public function exportexcel() 
    {
        return Excel::download(new DonationsExport, 'Donations.xlsx');
    }

    //Export PDF
    public function exportpdf()
    {
        $donations = Donation::all();
        $pdf = PDF::loadView('export.exportpdf', compact('donations'));
        return $pdf->download('Donations.pdf');
    }
}
