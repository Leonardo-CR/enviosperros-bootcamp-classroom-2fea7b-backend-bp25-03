<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';

    protected $fillable = [
        'fecha',
        'hora',
        'mascota_id',
        'veterinario_id',
    ];
    //Casteo de datos ;b
    protected $casts = [
        'fecha' => 'date',
        'hora' => 'datetime:H:i',
    ];

    //Relacion con mascotas
    public function mascotas()
    {
        return $this->hasMany(Mascota::class,'cita_id');
    }
}
