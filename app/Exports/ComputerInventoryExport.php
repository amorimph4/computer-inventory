<?php

namespace App\Exports;

use App\ComputerInventory;
use Maatwebsite\Excel\Concerns\FromCollection;

class ComputerInventoryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ComputerInventory::all();
    }
}
