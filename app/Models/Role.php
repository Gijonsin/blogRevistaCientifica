<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'ID_ROLES';
    public $timestamps = false;

    protected $fillable = [
        'NOMBRE_ROLES',
        'ID_USERS'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'ID_USERS');
    }
}
