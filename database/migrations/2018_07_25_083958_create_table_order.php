<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('alamat', 100);
            $table->string('email', 50);
            $table->string('no_tlp')->unique();
            $table->integer('id_item')->unsigned();
            $table->string('detail', 250)->nullable();
            $table->string('filebrief', 300);
            $table->timestamps();

            $table->foreign('id_item')
                  ->references('id')
                  ->on('item')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order');
    }
}
