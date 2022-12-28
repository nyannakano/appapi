<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    protected $fillable = ['titulo', 'hora_inicio', 'hora_final', 'confirmado'];

}
