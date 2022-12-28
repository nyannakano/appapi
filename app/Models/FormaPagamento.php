<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $fillable = [ 'for_name', 'for_type', 'meios_pagamento_id' ];
    protected $table = 'formas_pagamento';


    public function meioPagamento()
    {
        $this->hasOne(MeioPagamento::class);
    }
}
