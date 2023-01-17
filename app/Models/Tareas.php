<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    protected $table = 'tareas';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
    use HasFactory;

    public function material(){
        return $this->hasMany(Materiales::class);
    }

}
