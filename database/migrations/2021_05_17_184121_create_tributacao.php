<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTributacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tributacao', function (Blueprint $table) {
            $table->id();
            $table->string('tri_cnpj');
            $table->string('tri_razao_social');
            $table->string('tri_inscricao_estadual')->nullable();
            $table->string('tri_zipcode');
            $table->string('tri_number');
            $table->string('tri_address');
            $table->string('tri_street');
            $table->string('tri_complement')->nullable();
            $table->bigInteger('regime_tributario_id')->unsigned()->nullable();
            $table->bigInteger('cst_icms_id')->unsigned()->nullable();
            $table->bigInteger('cst_pis_id')->unsigned()->nullable();
            $table->bigInteger('cst_cofins_id')->unsigned()->nullable();
            $table->bigInteger('cst_ipi_id')->unsigned()->nullable();
            $table->double('tri_aliquota_icms')->default(0);
            $table->double('tri_aliquota_pis')->default(0);
            $table->double('tri_aliquota_cofins')->default(0);
            $table->double('tri_aliquota_ipi')->default(0);
            $table->foreign('regime_tributario_id')
                ->references('id')
                ->on('regimes_tributarios');
            $table->foreign('cst_icms_id')
                ->references('id')
                ->on('cst_icms');
            $table->foreign('cst_pis_id')
                ->references('id')
                ->on('cst_pis');
            $table->foreign('cst_cofins_id')
                ->references('id')
                ->on('cst_cofins');
            $table->foreign('cst_ipi_id')
                ->references('id')
                ->on('cst_ipi');
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
        Schema::dropIfExists('tributacao');
    }
}
