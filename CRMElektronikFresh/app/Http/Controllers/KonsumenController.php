<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('konsumen.konsumen', [
            "title" => "Konsumen",
            "navText" => "Konsumen",
            "navTextItem" => "",
            "konsumen" => Konsumen::latest()->get(),
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
        Konsumen::create($data);

        return redirect('/konsumen')->with('success', 'Data Konsumen Berhasil Dibuat!');
        // return $request;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Konsumen::find($id);
        $data->user_id = $request->user_id;
        $data->no_wa = $request->no_wa;
        $data->save();

        return redirect('/konsumen')->with('update', 'Data Konsumen Berhasil Diupdate!');

        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Konsumen::find($id);
        $data->delete();
        return redirect('/konsumen')->with('delete', 'Data Konsumen Berhasil Dihapus!');
    }

    public function show()
    {
        $konsumen = Konsumen::all();
        $carbon = \Carbon\Carbon::now()->format('d M Y');
        $pdf = Pdf::loadView('konsumen.konsumen-cetak', ['konsumen' => $konsumen, 'carbon' => $carbon]);
        return $pdf->stream();
    }
}