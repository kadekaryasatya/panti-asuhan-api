<?php

namespace App\Http\Controllers;

use App\Models\ObatPenyakit;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateObatPenyakitRequest;

class ObatPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obatPenyakits = ObatPenyakit::with(['penyakit', 'obat'])->get();

        $penyakit = $obatPenyakits->groupBy('penyakit.nama');

        $allData = $penyakit->map(function ($group) {
            $obat = $group->pluck('obat.nama')->unique()->values()->all();
            return [
                'penyakit' => strtolower($group[0]->penyakit->nama),
                'obat' => $obat,
            ];
        });

        return response()->json($allData->values());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obatPenyakit = ObatPenyakit::create($request->all());
        return response()->json($obatPenyakit, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ObatPenyakit $obatPenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ObatPenyakit $obatPenyakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateObatPenyakitRequest $request, ObatPenyakit $obatPenyakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ObatPenyakit $obatPenyakit)
    {
        //
    }
}
