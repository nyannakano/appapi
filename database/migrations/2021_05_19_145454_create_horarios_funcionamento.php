<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosFuncionamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_funcionamento', function (Blueprint $table) {
            $table->id();
            $table->time('hor_start');
            $table->time('hor_interval_start')->nullable();
            $table->time('hor_interval_end')->nullable();
            $table->time('hor_end');
            $table->bigInteger('dias_id')->unsigned();
            $table->bigInteger('lojas_id')->unsigned();
            $table->foreign('dias_id')
                ->references('id')
                ->on('dias');
            $table->foreign('lojas_id')
                ->references('id')
                ->on('lojas');
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
        Schema::dropIfExists('horarios_funcionamento');
    }
}
