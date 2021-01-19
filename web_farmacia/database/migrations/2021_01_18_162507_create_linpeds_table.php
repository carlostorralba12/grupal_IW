<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinpedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linpeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('importe');
            $table->integer('cantidad');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('pedido_id');
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
        Schema::dropIfExists('linpeds');
    }
}
