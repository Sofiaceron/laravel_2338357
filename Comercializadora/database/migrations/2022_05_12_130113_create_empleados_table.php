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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',40);
            $table->string('apellidos',40);
            $table->integer('telefono')->length(10);
            $table->string('direccion',40);
            $table->date('fecha_nacimiento');
            $table->float('salario',12, 2);
            $table->time('hora_inicio');
            $table->time('hora_salida');
            $table->unsignedBigInteger('comision_id');
            $table->foreign("comision_id")->references("id")->on("comisiones")
            ->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('empleados');
    }
};
