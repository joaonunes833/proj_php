<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'createdBy', 'id');
    }
    public function autor(){
        return $this->belongsTo(Autor::class, 'autorId', 'id');
    }
}

