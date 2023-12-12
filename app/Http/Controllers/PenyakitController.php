<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        $obats = Penyakit::all();
        return response()->json($obats);
    }

    public function show($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        return response()->json($penyakit);
    }

    public function store(Request $request)
    {
        $penyakit = Penyakit::create($request->all());
        return response()->json($penyakit, 201);
    }

    public function update(Request $request, $id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->update($request->all());
        return response()->json($penyakit, 200);
    }

    public function destroy($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->delete();
        return response()->json([$penyakit->nama => 'berhasil dihapus'], 200);
    }
}
