<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListagenericaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listagenerica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 30);
            $table->text('descricao')->nullable();
            $table->string('quantidade');
            $table->decimal('valor', 5, 2);
            $table->string('status');
            $table->string('imagem');
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
        Schema::dropIfExists('listagenerica');
    }
}
