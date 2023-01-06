<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    public function livro(){
        return $this->hasMany(Livro::class, 'autorId', 'id');
    }
}
