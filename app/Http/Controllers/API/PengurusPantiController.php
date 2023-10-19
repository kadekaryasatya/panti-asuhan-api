<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PengurusPanti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengurusPantiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengurusPantis = PengurusPanti::all();
        return response()->json($pengurusPantis, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_telepon' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = new PengurusPanti();

        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->tempat_lahir = $request->input('tempat_lahir');
        $data->tanggal_lahir = $request->input('tanggal_lahir');
        $data->no_telepon = $request->input('no_telepon');
        $data->isActive = 'aktif';
        $data->save();

        return response()->json(['message' => 'Data insert successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $petugasPanti = PengurusPanti::find($id);

        return response()->json([$petugasPanti]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengurusPanti $pengurusPanti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Mengambil data sebelumnya
    $data = PengurusPanti::find($id);

    if (!$data) {
        return response()->json(['message' => 'Data not found'], 404);
    }

    // Validasi data baru
    $validator = Validator::make($request->all(), [
        'nama' => 'required',
        'alamat' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'no_telepon' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Update data dengan data yang telah divalidasi
    $data->update([
        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
        'tempat_lahir' => $request->input('tempat_lahir'),
        'tanggal_lahir' => $request->input('tanggal_lahir'),
        'no_telepon' => $request->input('no_telepon'),
        'isActive' => $request->input('is_active'),
    ]);

    // Gunakan $previousId jika diperlukan
    // $previousId adalah id dari data sebelumnya

    return response()->json(['message' => 'Data updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $petugasPanti = PengurusPanti::find($id);
        $petugasPanti->delete();

        return response()->json(['message' => 'Data delete successfully']);
    }
}
