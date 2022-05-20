<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComisionIntegrante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'puesto',
    ];

    protected $date = [
        'fecha'
    ];

    public function comision()
    {
        return $this->belongsTo(Comision::class);
    }

}
