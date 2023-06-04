<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelanggan.pelanggan', [
            "title" => "Pelanggan",
            "navText" => "Pelanggan",
            "navTextItem" => "",
            "pelanggan" => Pelanggan::latest()->get(),
            "user" => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['user_id'] = $request->user_id;
        $data['no_wa'] = $request->no_wa;
        $data['jumlah_transaksi'] = $request->jumlah_transaksi;
        Pelanggan::create($data);

        return redirect('/pelanggan')->with('success', 'Data Pelanggan Berhasil Dibuat!');
        // $data['email'] = $request->email;
        // return $request;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Pelanggan::find($id);
        $data->user_id = $request->user_id;
        $data->no_wa = $request->no_wa;
        $data->jumlah_transaksi = $request->jumlah_transaksi;
        $data->save();

        return redirect('/pelanggan')->with('update', 'Data Pelanggan Berhasil Diupdate!');

        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect('/pelanggan')->with('delete', 'Data Pelanggan Berhasil Dihapus!');
    }


    public function show()
    {
        $pelanggan = Pelanggan::all();
        $carbon = \Carbon\Carbon::now()->format('d M Y');
        $pdf = Pdf::loadView('pelanggan.pelanggan-cetak', ['pelanggan' => $pelanggan, 'carbon' => $carbon]);
        return $pdf->stream();
    }
}