<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Poin;
use App\Models\Tukarpoin;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class TukarpoinController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('tukarpoin.tukarpoin', [
      "title" => "Poin",
      "navText" => "Poin",
      "navTextItem" => "Penukaran Poin",
      "tukarpoin" => Tukarpoin::latest()->get(),
      "pelanggan" => Pelanggan::all(),
      "poin" => Poin::all(),
      "status" => ['Berhasil', 'Pending', 'Gagal'],
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $data['pelanggan_id'] = $request->pelanggan_id;
    $data['poin_id'] = $request->poin_id;
    $data['tanggal'] = $request->tanggal;
    $data['status'] = $request->status;
    Tukarpoin::create($data);

    return redirect('/penukaran_poin')->with('success', 'Data Tukar Poin Berhasil Dibuat!');
    // return $request;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $data = Tukarpoin::find($id);
    $data->pelanggan_id = $request->pelanggan_id;
    $data->poin_id = $request->poin_id;
    $data->tanggal = $request->tanggal;
    $data->status = $request->status;
    $data->save();

    return redirect('/penukaran_poin')->with('update', 'Data Tukar Poin Berhasil Diupdate!');

    // return $request;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    // Barang::destroy($id);
    $data = Tukarpoin::find($id);
    $data->delete();
    return redirect('/penukaran_poin')->with('delete', 'Data Tukar Poin Berhasil Dihapus!');
  }

  public function show()
  {
    $tukarpoin = Tukarpoin::all();
    $carbon = Carbon::now()->format('d M Y');
    $pdf = Pdf::loadView('tukarpoin.tukarpoin-cetak', ['tukarpoin' => $tukarpoin, 'carbon' => $carbon]);
    return $pdf->stream();
  }
}