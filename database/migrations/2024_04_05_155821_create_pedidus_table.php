<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidus', function (Blueprint $table) {
            $table->id();
            $table->string('id_movimentu');
            $table->string('dizignasaun_sosial');
            $table->string('enderesu');
            $table->string('numeru_fiskal');
            $table->string('telefone');
            $table->string('email');
            $table->string('identifikasaun');
            $table->string('naran_firma');
            $table->string('id_morada');
            $table->string('id_karakterizasaun');
            $table->string('id_risku');
            $table->string('id_atu');
            $table->text('aktividade_estabelesimentu');
            $table->text('aktividade_prinsipal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidus');
    }
};
