<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecetaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'duracion' => $this->duracion,
            'diagnostico' => $this->diagnostico,
            'tratamiento' => $this->tratamiento,
            'temperatura' => $this->temperatura,
            'peso' => $this->peso,
            'mascota_id' => $this->mascota_id,
            'mascota_nombre' => $this->mascota->nombre ?? null,
            'veterinario_id' => $this->veterinario_id,
            'veterinario_nombre' => $this->veterinario->nombre,
        ];
    }
}
