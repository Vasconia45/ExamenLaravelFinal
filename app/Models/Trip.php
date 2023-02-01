<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'origen',
        'destino',
        'plazas',
        'fecha',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function drivers(){
        return $this->hasMany('App\Models\Driver');
    }
}
