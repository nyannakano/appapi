<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MeioPagamento extends Model
{
    protected $fillable = [ 'mei_name' ];
    protected $table = 'meios_pagamento';


    public function formasPagamento()
    {
        $this->hasMany(FormaPagamento::class);
    }


}
