<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenistransaksi;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class TransaksiController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transaksi.transaksi', [
            "title" => 'Transaksi',
            "navText" => 'Transaksi',
            "navTextItem" => 'Transaksi Penjualan',
            "transaksi" => Transaksi::latest()->get(),
            "jenistransaksi" => Jenistransaksi::all(),
            "barang" => Barang::all(),
            "user" => User::all()
        ]);
    }

    public function getBarang($id)
    {
        $barang = Barang::where('id', $id)->get();
        return response()->json($barang);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data['barang_id'] = $request->barang_id;
        $data['jenistransaksi_id'] = $request->jenistransaksi_id;
        $data['user_id'] = $request->user_id;

        $data['tanggal'] = $request->tanggal;
        $data['qty'] = $request->qty;
        $data['trans_poin'] = $request->trans_poin;
        Transaksi::create($data);

        return redirect('/transaksi')->with('success', 'Data Transaksi Berhasil Dibuat!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Transaksi::find($id);
        $data->barang_id = $request->barang_id;
        $data->jenistransaksi_id = $request->jenistransaksi_id;
        $data->tanggal = $request->tanggal;
        $data->user_id = $request->user_id;
        $data->qty = $request->qty;
        $data->trans_poin = $request->trans_poin;
        $data->save();

        return redirect('/transaksi')->with('update', 'Data Transaksi Berhasil Diupdate!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Transaksi::destroy($id);
        return redirect('/transaksi')->with('delete', 'Data Transaksi Berhasil Dihapus!');
    }


    public function show()
    {
        $transaksi = Transaksi::all();
        $carbon = Carbon::now()->format('d M Y');
        $pdf = Pdf::loadView('transaksi.transaksi-cetak', ['transaksi' => $transaksi, 'carbon' => $carbon])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}