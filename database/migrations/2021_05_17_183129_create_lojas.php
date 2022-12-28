<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLojas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->id();
            $table->string('loj_name');
            $table->string('loj_logotype')->default('defaultlogo');
            $table->string('loj_banner')->default('defaultbanner');
            $table->string('loj_description')->nullable();
            $table->boolean('loj_takeaway')->default(true);
            $table->bigInteger('loj_tributation')->unsigned()->nullable();
            $table->foreign('loj_tributation')
                ->references('id')
                ->on('tributacao');
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
        Schema::dropIfExists('lojas');
    }
}
