<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('tipou_id')
                ->nullable()
                ->constrained()
                ->onDelete('Set Null');

            $table->string('nombreC');
            $table->string('img');
            $table->bigInteger('telefono');
            $table->string('correo')->unique();
            $table->string('password');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
