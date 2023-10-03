<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'cidades');
    }
}
