<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [ 'cat_name', 'cat_description' ];

    public function categorias()
    {
        $this->hasMany(Produto::class);
    }
}
