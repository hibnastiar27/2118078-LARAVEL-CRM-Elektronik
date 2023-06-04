<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class PoinController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('poin.poin', [
      "title" => "Poin",
      "navText" => "Poin",
      "navTextItem" => "Poin",
      "poin" => Poin::latest()->get(),
      "status" => ['Berfungsi', 'Habis', 'Expired'],
    ]);
  }


  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // field database = name di input blade 
    $data['nama'] = $request->nama;
    $data['min_trans'] = $request->min_trans;
    $data['batasan'] = $request->batasan;
    $data['nominal'] = $request->nominal;
    $data['dateline'] = $request->dateline;
    $data['status'] = $request->status;
    Poin::create($data);

    return redirect('/poin')->with('success', 'Data Poin Berhasil Dibuat!');
    // return $request;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $data = Poin::find($id);
    $data->nama = $request->nama;
    $data->min_trans = $request->min_trans;
    $data->batasan = $request->batasan;
    $data->nominal = $request->nominal;
    $data->dateline = $request->dateline;
    $data->status = $request->status;
    $data->save();

    return redirect('/poin')->with('update', 'Data Poin Berhasil Diupdate!');

    // return $request;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $data = Poin::find($id);
    $data->delete();
    return redirect('/poin')->with('delete', 'Data Poin Berhasil Dihapus!');
  }

  public function show()
  {
    $poin = Poin::all();
    $carbon = Carbon::now()->format('d M Y');
    $pdf = Pdf::loadView('poin.poin-cetak', ['poin' => $poin, 'carbon' => $carbon]);
    return $pdf->stream();
  }
}