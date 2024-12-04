<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    // // Si no usas el campo "created_at" y "updated_at", puedes deshabilitar estos campos
    // public $timestamps = false;
    use HasFactory;

    protected $table = 'revistas'; // Tabla principal asociada

    protected $fillable = [
        'TITULO_REVISTAS',
        'FECHA_REVISTAS',
        'DOI_REVISTAS',
        'VOLUMEN_REVISTAS',
        'NUMERO_REVISTAS',
    ];

    protected $primaryKey = 'ID_REVISTAS';

    public $timestamps = false;

    // Relación de una revista con sus artículos asociados
    public function articulos()
    {
        return $this->belongsToMany(
            Articulo::class,        // Modelo relacionado
            'revistas_articulos',   // Tabla intermedia
            'ID_REVISTAS',          // Clave foránea en `revistas_articulos`
            'ID_ARTICULOS'          // Clave foránea en `articulos`
        );
    }
}
