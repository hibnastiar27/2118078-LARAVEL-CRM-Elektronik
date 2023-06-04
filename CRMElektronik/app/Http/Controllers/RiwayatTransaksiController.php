<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class RiwayatTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function transPelanggan()
    {
        return view('riwayatTransPelanggan', [
            "title" => "Riwayat Transaksi",
            "navText" => "Riwayat Transaksi",
            "navTextItem" => "Pelanggan",
            "transaksi" => Transaksi::latest()->get(),
        ]);
    }

    public function transKonsumen()
    {
        return view('riwayatTransKonsumen', [
            "title" => "Riwayat Transaksi",
            "navText" => "Riwayat Transaksi",
            "navTextItem" => "Konsumen",
            "transaksi" => Transaksi::latest()->get(),
        ]);
    }

    public function showPelanggan()
    {
        $transaksi = Transaksi::all();
        $carbon = Carbon::now()->format('d M Y');
        $pdf = Pdf::loadView('riwayatTransPelanggan-cetak', ['transaksi' => $transaksi, 'carbon' => $carbon])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function showKonsumen()
    {
        $transaksi = Transaksi::all();
        $carbon = Carbon::now()->format('d M Y');
        $pdf = Pdf::loadView('riwayatTransKonsumen-cetak', ['transaksi' => $transaksi, 'carbon' => $carbon])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}