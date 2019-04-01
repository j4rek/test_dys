<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\libs\request\curl;

use App\ufs;
use Excel;


class dys extends Controller
{
    function showUf(request $request) {

        $date_y = $request->input('year');
        $date_m = $request->input('month');
        $sbif = new curl('https://api.sbif.cl/api-sbifv3/recursos_api/uf/' . $date_y .'/' . $date_m .'?apikey=' . config('services.sbif.secret') . '&formato=json');
        $uf_json = json_decode($sbif->execute());
        $ufs = $uf_json->UFs;
        return view('showUf', ['ufs' => $ufs, 'year'=>$date_y, 'month'=> $date_m]);
    }

    function index(){
        $years = [];
        for($i = 2019; $i >= 1990; $i--){
            array_push($years, $i);
        }
        $months = [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ];
        return view('index', ['years' => $years, 'months' => $months]);
    }

    function download(request $request, $year, $month){
        $sbif = new curl('https://api.sbif.cl/api-sbifv3/recursos_api/uf/' . $year .'/' . $month .'?apikey=' . config('services.sbif.secret') . '&formato=json');
        $uf_json = json_decode($sbif->execute());
        $ufs = $uf_json->UFs;

        $export = new UFs($ufs);
        return Excel::download($export, 'Listado_valores_uf.xlsx');
    }
    
}
