<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulos';

    protected $fillable = [
        'ISSN_ARTICULOS',
        'TITULO_ARTICULOS',
        'RESUMEN_ARTICULOS',
        'PALABRAS_ARTICULOS',
        'FECHA_ARTICULOS',
        'REVISTA_ARTICULOS',
        'DOI_ARTICULOS',
        'URL_ARTICULOS',
    ];

    protected $primaryKey = 'ID_ARTICULOS';

    public $timestamps = false;
}
