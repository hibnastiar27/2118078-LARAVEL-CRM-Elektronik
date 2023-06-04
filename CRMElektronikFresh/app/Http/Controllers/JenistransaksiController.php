<?php

namespace App\Http\Controllers;

use App\Models\Jenistransaksi;
use Illuminate\Http\Request;

class JenistransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jenistransaksi.jenisTransaksi', [
            "title" => "Transaksi",
            "navText" => "Transaksi",
            "navTextItem" => "Jenis Transaksi",
            'jenistransaksi' => Jenistransaksi::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['jenis'] = $request->jenistrans;
        Jenistransaksi::create($data);
        return redirect('/jenis_transaksi')->with('success', 'Data Jenis Transaksi Berhasil Dibuat!');
        // return $request;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Jenistransaksi::find($id);
        $data->jenis = $request->jenistrans;
        $data->save();

        return redirect('/jenis_transaksi')->with('update', 'Data Jenis Transaksi Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jenistransaksi::destroy($id);
        return redirect('/jenis_transaksi')->with('delete', 'Data Jenis Transaksi Berhasil Dihapus!');
    }




    // public function show()
    // {
    //     return view('jenisTransaksi', [
    //         "title" => "Transaksi",
    //         "navText" => "Transaksi",
    //         "navTextItem" => "Jenis Transaksi",
    //         'jenistransaksi' => Jenistransaksi::all()
    //     ]);
    // }

    // public function create()
    // {
    //     return view('jenisTransaksi', [
    //         "title" => "Transaksi",
    //         "navText" => "Transaksi",
    //         "navTextItem" => "Jenis Transaksi",
    //         'jenistransaksi' => Jenistransaksi::all()
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     return $request;
    // }
}