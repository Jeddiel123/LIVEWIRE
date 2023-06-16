<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    protected $fillable = ['nombre', 'apellido', 'telefono'];

    public function departamentos()
{
    return $this->belongsToMany(Departamento::class, 'encargado_departamento');
}

}
