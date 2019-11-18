<?php

namespace App\Http\Controllers;
use App\Exports\UserExport; 
use Maatwebsite\Excel\Facades\Excel; 
use Illuminate\Http\Request;
use App\User;
use PDF;


class CsvController extends Controller
{
    public function exportexel(){
        return Excel::download(new UserExport, 'users.xls'); 
      } 
    public function exportpdf(){
        $datas = User::all();
        $pdf = PDF::loadview('export.exportpdf', ['datas'=>$datas]);
        return $pdf->download('users.pdf');
      } 
      public function showdata(){
        $data = User::all(); 
        return view('users',['datas'=>$data]); 
      }
}
