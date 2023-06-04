<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('user.user', [
      "title" => "User",
      "navText" => "Pengelola",
      "navTextItem" => "User",
      "user" => User::latest()->get(),
      "role" => ['admin', 'pelanggan', 'konsumen'],
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
    // $request->user()->fill([
    //     'password' => Hash::make($request->newPassword)
    // ])->save();

    // field database = name di input blade 
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['role'] = $request->role;
    $data['password'] = $request->password;
    User::create($data);

    return redirect('/user')->with('success', 'Data User Berhasil Dibuat!');
    // return $request;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $data = User::find($id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->role = $request->role;
    $data->password = $request->password;
    $data->save();

    return redirect('/user')->with('update', 'Data User Berhasil Diupdate!');
    // return $request;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $data = User::find($id);
    $data->delete();
    return redirect('/user')->with('delete', 'Data User Berhasil Dihapus!');
  }

  public function show()
  {
    $user = User::all();
    $carbon = Carbon::now()->format('d M Y');
    $pdf = Pdf::loadView('user.user-cetak', ['user' => $user, 'carbon' => $carbon])->setPaper('a4', 'landscape');
    return $pdf->stream();
  }
}