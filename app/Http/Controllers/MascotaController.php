<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMascotaRequest;
use App\Http\Resources\MascotaResource;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    //Lista de pacientes
    public function index()
    {
        return MascotaResource::collection(Mascota::all());
    }

    //Crear Paciente
    public function store(StoreMascotaRequest $request)
    {
        //validacion usando el request
        $data = $request->validated();
        $mascota = Mascota::create($data);
        // Respuesta JSON con el recurso, código 201 (creado)
        return new MascotaResource($mascota);
    }
    //Editar Paciente
    public function update(StoreMascotaRequest $request, Mascota $mascota)
    {
        $data = $request->validated();
        $mascota->update($data);
        //Respuesta en JSON + codigo 200
        return new MascotaResource($mascota);
    }
    //Mostrar paciente
    public function show(Mascota $mascota)
    {
        // Retornar la mascota como recurso 200 || !404
        return new MascotaResource($mascota);
    }
    //eliminar paciente
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return response()->json([
            'message' => 'Mascota eliminada correctamente.'
        ], 200);
    }
}
