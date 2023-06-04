<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class AdminController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('admin.admin', [
      "title" => "Admin",
      "navText" => "Pengelola",
      "navTextItem" => "Admin",
      "admin" => Admin::latest()->get(),
      "user" => User::all(),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $data['user_id'] = $request->user_id;
    $data['no_wa'] = $request->no_wa;
    $data['alamat'] = $request->alamat;
    // $data['status'] = $request->status;
    Admin::create($data);

    return redirect('/admin')->with('success', 'Data Admin Berhasil Dibuat!');
    // return $request;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $data = Admin::find($id);
    $data->user_id = $request->user_id;
    $data->no_wa = $request->no_wa;
    $data->alamat = $request->alamat;
    // $data->status = $request->status;
    $data->save();

    return redirect('/admin')->with('update', 'Data Admin Berhasil Diupdate!');

    // return $request;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    // Barang::destroy($id);
    $data = Admin::find($id);
    $data->delete();
    return redirect('/admin')->with('delete', 'Data Admin Berhasil Dihapus!');
  }

  public function show()
  {
    $admin = Admin::all();
    $carbon = Carbon::now()->format('d M Y');
    $pdf = Pdf::loadView('admin.admin-cetak', ['admin' => $admin, 'carbon' => $carbon]);
    return $pdf->stream();
  }

}