<?php

namespace App\Services;

use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Exporter;
use Maatwebsite\Excel\Importer;

trait FileService
{

	private $excel;
    private $exporter;
    private $importer;


    public function __construct(Excel $excel, Importer $importer, Exporter $exporter)
    {
        $this->excel = $excel;
    	$this->exporter = $exporter;
    	$this->importer = $importer;
    }

    public function exportExcel($import )
    {
        return $this->excel->download($import);
    }
    
    public function importExcel($import ,$file)
    {
        return $this->excel->import($import, $file);
    }
    
    public function export($import, $file)
    {
        return $this->exporter->download($import, $file);
    }

    public function import($import ,$file)
    {
        return $this->importer->import($import, $file);
    }

}