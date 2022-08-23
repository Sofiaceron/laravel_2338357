<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitaciones extends Model
{
    use HasFactory;
    protected $table = "reservas";
    protected $fillable = [
        'id',
        'piso',
        'max_personas',
        'tiene_cama_base',
        'tiene_ducha',
        'tiene_bano',
        'tiene_balcon',

    ];

    public function reserva()
    {
        return $this->hasMany(App\Reservas::class);
    }
}
