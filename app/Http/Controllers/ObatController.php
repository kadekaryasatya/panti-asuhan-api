<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return response()->json($obats);
    }

    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return response()->json($obat);
    }

    public function store(Request $request)
    {
        $obat = Obat::create($request->all());
        return response()->json($obat, 201);
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);
        $obat->update($request->all());
        return response()->json($obat, 200);
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        return response()->json([$obat->nama => 'berhasil dihapus'], 200);
    }
}
