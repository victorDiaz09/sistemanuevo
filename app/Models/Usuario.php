<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;
    protected $table = "usuario";
    protected $primaryKey = "id_usuario";
    public $timestamps = false;
    protected $fillable = [
        "usuario", "password", "nombres", "telefono", "correo", "foto", "codigo"
    ];
}
