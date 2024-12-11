<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigador extends Model
{
    use HasFactory;

    protected $table = 'investigadores';

    protected $fillable = [
        'NOMBRE_INVESTIGADORES',
        'APELLIDO_INVESTIGADORES',
        'UNIVERSIDAD_INVESTIGADORES',
        'ORCID_INVESTIGADORES',
        'ID_USERS',
    ];

    public $timestamps = false;
}
