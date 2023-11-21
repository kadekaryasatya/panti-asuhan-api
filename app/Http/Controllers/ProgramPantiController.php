<?php

namespace App\Http\Controllers;

use App\Models\ProgramPanti;
use App\Http\Requests\StoreProgramPantiRequest;
use App\Http\Requests\UpdateProgramPantiRequest;
use Illuminate\Http\JsonResponse;

class ProgramPantiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $programPantis = ProgramPanti::all();

        if($programPantis->isEmpty()) {
            return response()->json(["message" => "data tidak ditemukan"], 200);
        }

        return response()->json($programPantis, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramPantiRequest $request): JsonResponse
    {
        $data = $request->validated();

        $programPanti = ProgramPanti::create($data);

        return response()->json(["data" => $programPanti, "message" => "Berhasil membuat program panti"], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgramPanti $programPanti): JsonResponse
    {
        if(!$programPanti) {
            return response()->json(["message" => "data tidak ditemukan"], 404);
        }

        return response()->json($programPanti, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramPantiRequest $request, ProgramPanti $programPanti): JsonResponse
    {
        $data = $request->validated();

        $programPanti->update($data);

        return response()->json(["data" => $programPanti, "message" => "Berhasil memperbarui program panti"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramPanti $programPanti): JsonResponse
    {
        $programPanti->delete();

        return response()->json(["name" => $programPanti->judul, "message" => "Berhasil menghapus program panti"], 200);
    }
}
