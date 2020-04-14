<?php

namespace App\Exports;

use App\Donation;
use Maatwebsite\Excel\Concerns\FromCollection;

class DonationsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Donation::select('nama', 'tanggal', 'jumlah')->get();
    }
}
