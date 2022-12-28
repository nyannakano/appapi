<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class HorarioFuncionamento extends Model
{
    protected $fillable = [ 'hor_start', 'hor_interval_start', 'hor_interval_end', 'dias_id', 'lojas_id' ];
    protected $table = ['horarios_funcionamento'];


}
