<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = 'recetas';

    protected $fillable = [
      'fecha',
      'hora',
      'duracion',
      'diagnostico',
      'tratamiento',
      'temperatura',
      'peso',
      'mascota_id',
      'veterinario_id',
    ];

    protected $casts = [
    'fecha' => 'date',
    'hora' => 'datetime:H:i',
    'temperatura' => 'float',
    'peso' => 'float',
  ];



    //Relacion mascotas
    public function mascotas()
    {
      return $this->belongsToMany(Mascota::class,'mascotas_recetas','receta_id','mascota_id');
    }

    //Relacion recetas
    public function veterinarios()
    {
      return $this->hasMany(Veterinario::class,'receta_id');
    }

    
}
