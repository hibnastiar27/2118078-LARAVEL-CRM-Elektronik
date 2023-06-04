<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DistributorController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('distributor.distributor', [
      "title" => 'Distributor',
      "navText" => 'Distributor',
      "navTextItem" => '',
      "distributor" => Distributor::latest()->get(),
      "kategori" => [
        [
          'id' => 0,
          'kategori' => 'Retail',
        ],
        [
          'id' => 1,
          'kategori' => 'Grosir',
        ],
        [
          'id' => 2,
          'kategori' => 'Exporter',
        ]
      ]
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $data['nama'] = $request->nama;
    $data['email'] = $request->email;
    $data['no_wa'] = $request->no_wa;
    $data['kategori'] = $request->kategori;
    Distributor::create($data);

    return redirect('/distributor')->with('success', 'Data Distributor Berhasil Dibuat!');
    // return $request;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $data = Distributor::find($id);
    $data->nama = $request->nama;
    $data->email = $request->email;
    $data->no_wa = $request->no_wa;
    $data->kategori = $request->kategori;
    $data->save();

    return redirect('/distributor')->with('update', 'Data Distributor Berhasil Diupdate!');

    // return $request;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $data = Distributor::find($id);
    $data->delete();
    return redirect('/distributor')->with('delete', 'Data Distributor Berhasil Dihapus!');
  }


  public function show()
  {
    $distributor = Distributor::all();
    $carbon = \Carbon\Carbon::now()->format('d M Y');
    $pdf = Pdf::loadView('distributor.distributor-cetak', ['distributor' => $distributor, 'carbon' => $carbon]);
    return $pdf->stream();
  }
}