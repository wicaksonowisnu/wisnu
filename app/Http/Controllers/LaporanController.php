<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\model\t_pemohon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function adminDataPemohon(Request $request)
    {
        $pemohon = t_pemohon::all();
        return view('admin.pemohon.cetak')->with(['pemohons' => $pemohon]);
    }

    public function cetakAdminDataPemohon(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataPemohon($request));
        return $pdf->stream();
//        return $this->adminDataPemohon($request);
    }

    public function adminDataKasus(Request $request)
    {
//        $caridata = $request->caridata;
//        $status = $request->status;
//        $mitra = mitraModel::where('status', 'LIKE', '%' . $status . '%')
//            ->where(function ($q) use ($caridata) {
//                $q->where('username', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('email', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('noHp', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('alamat', 'LIKE', '%' . $caridata . '%');
//            })
//            ->get();
        return view('admin.pemohon.cetak')->with(['mitra' => "datanya"]);
    }

    public function cetakAdminDataKasus(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataKasus($request));
        return $pdf->stream();
    }


    public function adminDataAdvokat(Request $request)
    {
//        $caridata = $request->caridata;
//        $status = $request->status;
//        $mitra = mitraModel::where('status', 'LIKE', '%' . $status . '%')
//            ->where(function ($q) use ($caridata) {
//                $q->where('username', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('email', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('noHp', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('alamat', 'LIKE', '%' . $caridata . '%');
//            })
//            ->get();
        return view('admin.pemohon.cetak')->with(['mitra' => "datanya"]);
    }

    public function cetakAdminDataAdvokat(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataAdvokat($request));
        return $pdf->stream();
    }
}
