<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;
    protected $table = "reservas";
    protected $fillable = [
        'inicio_fecha',
        'fin_fecha',
        'habitacion_id',
        'huesped_id',
    ];

    public function huesped()
    {
        return $this->BelongTo(App\Huespedes::class);
    }
}
