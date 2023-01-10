<?php

namespace App\Http\Controllers;

use App\Models\Penumpang;
use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    public function index()
    {
        // $request all berfungsi untuk memasukkan semua request dari nama fiel
        $penumpang = Penumpang::all();

        return response()->json(
            $data = [
                'data' => $penumpang,

            ]
        );
    }

    public function store(Request $request)
    {
        // $request all berfungsi untuk memasukkan semua request dari nama field
        $penumpang = new Penumpang;
        $penumpang->nama = $request->nama;
        $penumpang->alamat = $request->alamat;
        $penumpang->umur = $request->umur;
        $output = $penumpang->save();
        return response()->json(
            $data = [
                'data' => $request->all(),
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penumpang = Penumpang::find($id);
        return response()->json(
            $data = [
                'data' => $penumpang,
            ]
        );
    }


    public function update(Request $request, $id)
    {
        $penumpang = Penumpang::find($id);
        $penumpang->nama = $request->nama;
        $penumpang->alamat = $request->alamat;
        $penumpang->umur = $request->umur;
        $penumpang->save();
        return response()->json(
            $data = [
                'data' => $request->all(),
                'penumpang' => $penumpang
            ]
        );
    }

    public function destroy($id)
    {
        // $request all berfungsi untuk memasukkan semua request dari nama field
        $penumpang = Penumpang::find($id);
        $hapus = $penumpang->delete();

        return response()->json(
            $data = [
                'data' => $hapus,

            ]
        );
    }
}
