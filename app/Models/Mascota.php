<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';

    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'peso',
        'raza',
        'especie_id',
        'cliente_id'
    ];

    //Casteo de datos ;b
    protected $casts = [
        'fecha_nacimiento' => 'date',
        'peso' => 'float',
    ];

    //Relacion para saber que mascota pertenece a que cliente
    public function clientes()
    {
        return $this->belongsToMany(User::class,'clientes_mascotas','mascota_id','cliente_id');
    }
    //Relacion para saber las vacunas de un cliente
    public function vacunas()
    {
        return $this->belongsToMany(Vacuna::class,'mascotas_vacunas','mascota_id','vacuna_id');
    }

    //Relacion con recetas
    public function recetas()
    {
        return $this->belongsToMany(Receta::class,'mascotas_recetas','mascota_id','receta_id');
    }
    //Relacion con citas 
    public function citas()
    {
        return $this->hasMany(Cita::class,'mascota_id');
    }
    //Relacion con especie
    public function especie()
    {
        return $this->hasOne(Especie::class,'mascota_id');
    }
}
