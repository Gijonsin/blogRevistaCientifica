<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory;

    protected $table = 'avisos';
    protected $primaryKey = 'ID_AVISOS';
    public $timestamps = false;

    protected $fillable = [
        'TITULO_AVISOS',
        'CONTENIDO_AVISOS',
        'ID_USERS',
        'CREADO_AVISOS',
        'ACTUALIZADO_AVISOS',
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class, 'ID_USERS');
    }
}