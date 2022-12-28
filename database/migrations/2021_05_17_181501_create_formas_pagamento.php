<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormasPagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formas_pagamento', function (Blueprint $table) {
            $table->id();
            $table->string('for_name');
            $table->integer('for_type')->default(0); // tipo de pagamento, se vai ser pelo app ou na entrega
            // 0 = app, 1 = pagar na entrega
            $table->bigInteger('meios_pagamento_id')->unsigned();
            $table->foreign('meios_pagamento_id')
                ->references('id')
                ->on('meios_pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formas_pagamento');
    }
}
