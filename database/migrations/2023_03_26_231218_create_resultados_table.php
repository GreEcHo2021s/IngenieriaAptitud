<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //
    Schema::create('resultados', function (Blueprint $table) {
        $table->id();
        $table->string('respuesta');
        $table->unsignedBigInteger('formularios_id');
        $table->timestamps();
    
        $table->foreign('formularios_id')
              ->references('id')
              ->on('formularios')
              ->onDelete('cascade'); // Elimina los registros relacionados en cascada si se elimina un registro de la tabla principal
    
        $table->index('formularios_id'); // Crea un índice para la columna de clave foránea
    });

    //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
};
