<?php

namespace App\Http\Controllers;

use App\Models\ProgramDonatur;
use App\Http\Requests\StoreProgramDonaturRequest;
use App\Http\Requests\UpdateProgramDonaturRequest;
use Illuminate\Http\JsonResponse;

class ProgramDonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $programDonaturs = ProgramDonatur::all();

        if($programDonaturs->isEmpty()) {
            return response()->json(["error" => "data tidak ditemukan"], 200);
        }

        return response()->json($programDonaturs, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramDonaturRequest $request): JsonResponse
    {
        $data = $request->validated();

        $programDonatur = ProgramDonatur::create($data);

        return response()->json($programDonatur, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgramDonatur $programDonatur): JsonResponse
    {
        if(!$programDonatur) {
            return response()->json(["error" => "data tidak ditemukan"], 404);
        }

        return response()->json($programDonatur, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramDonaturRequest $request, ProgramDonatur $programDonatur): JsonResponse
    {
        $data = $request->validated();

        $programDonatur->update($data);

        return response()->json($programDonatur, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramDonatur $programDonatur): JsonResponse
    {
        $programDonatur->delete();

        return response()->json(["success" => "program berhasil dihapus"], 200);
    }
}
