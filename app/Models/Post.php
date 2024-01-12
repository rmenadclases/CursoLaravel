<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['body'];
    protected $with = ['user'];//Conesto forzamos a que incluya la relación de los usuarios
    public function user(){        
        return $this->belongsTo(User::class);//Operador belongTo(pertenece a) + nombre entidad en este caso User
    }
}
