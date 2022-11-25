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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto');
            $table->string('precio');
            $table->string('cantidad');
            $table->string('infoProveedor');
            $table->string('modelo');
            $table->string('color');
            $table->string('descripcion');
            // $table->bigInteger('imagen_producto');
            // $table->bigInteger('tipo_categoria');
            $table
                ->foreignId('categoria_id')
                ->nullable()
                ->constrained()
                ->onDelete('Set Null');
            $table
                ->foreignId('productoimg_id')
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
        Schema::dropIfExists('productos');
    }
};
