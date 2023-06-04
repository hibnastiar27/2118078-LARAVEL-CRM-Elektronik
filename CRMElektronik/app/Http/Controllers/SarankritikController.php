<?php

namespace App\Http\Controllers;

use App\Models\Balaskisar;
use App\Models\Sarankritik;
use Illuminate\Http\Request;

class SarankritikController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('saranKritik.saranKritik', [
      "title" => "Saran Kritik",
      "navText" => "Saran Kritik",
      "navTextItem" => "",
      "kisar" => Sarankritik::latest()->get(),
      "balas" => Balaskisar::latest()->get(),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $data['sarankritik_id'] = $request->sarankritik_id;
    $data['balasan'] = $request->balasan;
    // // $data['tanggal'] = $request->tanggal;
    Balaskisar::create($data);

    return redirect('/saran_kritik')->with('success', 'Data Balas Saran & Kritik Berhasil Dibuat!');
    // return $request;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $data = Balaskisar::find($id);
    $data->balasan = $request->balasan;
    $data->save();

    return redirect('/saran_kritik')->with('update', 'Data Balas Saran & Kritik Berhasil Diupdate!');
    // return $request;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $data = Balaskisar::find($id);
    $data->delete();
    return redirect('/saran_kritik')->with('delete', 'Data Balas Saran & Kritik Berhasil Dihapus!');
  }
}