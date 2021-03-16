<?php

namespace App\Downloads;

use App\pstore;
use Maatwebsite\Excel\Concerns\FromQuery;

class ExportSales implements FromQuery 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return pstore::query()->where('status','sold')->whereYear('date_sold',date('Y'))->whereMonth('date_sold',date('m'));
    }
}