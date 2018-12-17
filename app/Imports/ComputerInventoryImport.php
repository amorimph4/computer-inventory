<?php

namespace App\Imports;

use App\ComputerInventory;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class ComputerInventoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] == 'id' || !isset($row[0]) ){
            return null;
        }

        return new ComputerInventory([
            'name' => $row[1] , 
	        'launch_year' => $row[2], 
	        'manufacturer' => $row[3], 
	        'operational_system' => $row[4],
	        'cpu' => $row[5] ,
	        'memory' => $row[6],
	        'storage' => $row[7],
	        'initial_price' => (float) $row[8],
	        'image' => $row[9] 
        ]);
    }
}
