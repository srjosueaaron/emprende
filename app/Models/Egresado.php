<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $table="egresados";
    protected $primaryKey="id";
    protected $fillable= [
        'nombre', 'slug', 'foto', 'experiencia', 'profesion', 'universidad', 'red1', 'red2'
    ];

    //indicar a la bd
    public $timestamps = false; 
}
