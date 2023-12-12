<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolahs = Sekolah::all();

        return response()->json($sekolahs);
    }

    public function show($id)
    {
        $sekolah = Sekolah::findOrFail($id);
        return response()->json($sekolah);
    }

    public function store(Request $request)
    {
        $sekolah = Sekolah::create($request->all());
        return response()->json($sekolah, 201);
    }

    public function update(Request $request, $id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->update($request->all());
        return response()->json($sekolah, 200);
    }

    public function destroy($id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->delete();
        return response()->json([$sekolah->nama => 'berhasil dihapus'], 200);
    }
}
