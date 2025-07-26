<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MascotaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nombre' => $this->nombre,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'peso' => $this->peso,
            'raza' => $this->raza,
            'especie_id' => $this->especie->nombre ?? null,
            'cliente_nombre' => $this->clientes->name ?? null,
        ];
    }
}
