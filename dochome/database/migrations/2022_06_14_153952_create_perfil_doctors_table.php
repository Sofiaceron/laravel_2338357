<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createperfil_doctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_doctors', function (Blueprint $table) {
            $table->id();
            $table->string('correo',30);
            $table->password('password',30);
            $table->string('especializacion',30);
            $table->string('whatsapp',30);
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
        Schema::dropIfExists('perfil_doctors');
    }
};
