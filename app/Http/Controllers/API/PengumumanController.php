<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        return Pengumuman::all();
    }

    public function show($id)
    {
        return Pengumuman::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Pengumuman::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Pengumuman = Pengumuman::findOrFail($id);
        $Pengumuman->update($request->all());
        return $Pengumuman;
    }

    public function destroy($id)
    {
        $Pengumuman = Pengumuman::findOrFail($id);
        $Pengumuman->delete();
        return response()->json(['message' => 'Pengumuman deleted']);
    }
}
