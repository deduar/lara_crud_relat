<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiales extends Model
{
    protected $table = 'materiales';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','tarea_id'];
    use HasFactory;

    public function tarea()
    {
        return $this->belongsTo(Tareas::class);
    }
}
