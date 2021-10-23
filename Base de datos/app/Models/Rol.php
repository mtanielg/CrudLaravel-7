<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    /**Se crea con un comando*/
    protected $table='rol';
    public $timestamps=false;
    protected $fillable=[
        'id_rol', 'descripcion'
    ];

    protected $primaryKey='id_rol';
}
