<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenisbarang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('barang.barang', [
      "title" => "Barang",
      "navText" => "Barang",
      "navTextItem" => "",
      "barang" => Barang::latest()->get(),
      // "jenisBarang" => Jenisbarang::all(),
      "jenis" => [
        'Kabel',
        'Mouse',
        'Lampu',
      ]
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // field database = name di input blade 
    $data['nama'] = $request->nama;
    // $data['jenisbarang_id'] = $request->jenisbarang_id;
    $data['jenis'] = $request->jenis;
    $data['harga'] = $request->harga;
    $data['stok'] = $request->stok;
    Barang::create($data);

    return redirect('/barang')->with('success', 'Data Barang Berhasil Dibuat!');
    // return $request;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $data = Barang::find($id);
    $data->nama = $request->nama;
    // $data->jenisbarang_id = $request->jenisbarang_id;
    $data->jenis = $request->jenis;
    $data->harga = $request->harga;
    $data->stok = $request->stok;
    $data->save();

    return redirect('/barang')->with('update', 'Data Barang Berhasil Diupdate!');

    // return $request;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    // Barang::destroy($id);
    $data = Barang::find($id);
    $data->delete();
    return redirect('/barang')->with('delete', 'Data Barang Berhasil Dihapus!');
  }


  public function show()
  {
    $barang = Barang::all();
    $carbon = \Carbon\Carbon::now()->format('d M Y');
    $pdf = Pdf::loadView('barang.barang-cetak', ['barang' => $barang, 'carbon' => $carbon]);
    return $pdf->stream();
  }
}