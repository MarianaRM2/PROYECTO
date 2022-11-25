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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('info_cliente');
            $table->string('descripcion');
            // $table->string('info_cliente');
            // $table->bigInteger('cliente_producto');
            // $table->bigInteger('cliente_usuario');
            $table
                ->foreignId('producto_id')
                ->nullable()
                ->constrained()
                ->onDelete('Set Null');
            $table
                ->foreignId('usuario_id')
                ->nullable()
                ->constrained()
                ->onDelete('Set Null');
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
        Schema::dropIfExists('clientes');
    }
};