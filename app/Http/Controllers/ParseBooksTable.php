<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GoogleSheetsImport;
class ParseBooksTable extends Controller
{
    private $filePath = 'https://docs.google.com/spreadsheets/d/1LpyjeuO9Tz7zN4myiDSt1AVlGn9PFd4l/edit#gid=682307266';

    public function import()
    {
        $import = new GoogleSheetsImport();
        Excel::import($import, $this->filePath);
        $data = $import->getData();
        dd($data);

        // process the imported data as needed
    }
}
