<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExecelImport;
use App\Exports\ExecelExport;


class FileController extends Controller
{
  public function import(Request $request){
    $path = $request->file('file')->getRealPath();
    $data = array_map('str_getcsv', file($path));

    Excel::import(new ExecelImport, $request->file('file')->store('temp'));
    // $rows = Excel::toArray(new ExecelImport, $request->file('file'));
    // dd($rows);
    return back();

  }
}
