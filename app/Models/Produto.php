<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [ 'pro_name', 'pro_description', 'pro_price', 'categorias_id' ];

    public function categorias()
    {
        $this->hasOne(Categoria::class);
    }

}
