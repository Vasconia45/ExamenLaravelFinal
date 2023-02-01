<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'valoracion',
        'kilometros',
        'trip_id',
    ];

    public function trip(){
        return $this->belongsTo('App\Models\Trip');
    }
}
