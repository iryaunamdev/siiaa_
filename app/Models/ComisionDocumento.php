<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComisionDocumento extends Model
{
    use HasFactory;

    protected $table = ['comisiones_documentos'];

    protected $fillable = [
        'comision_id', 'tipo_id', 'titulo', 'fecha', 'filename',

    ];

    public function comision()
    {
        return $this->belongsTo(Comision::class);
    }
}
