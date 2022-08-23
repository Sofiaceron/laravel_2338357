<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = "rooms";
    protected $fillable=[
        'id',
        'piso',
        'max_personas',
        'tiene_cama_base',
        'tiene_ducha',
        'tiene_bano',
        'tiene_balcon',

    ];

    public function reservation(){
        return $this->hasMany(App\Reservation::class);
    }
}
