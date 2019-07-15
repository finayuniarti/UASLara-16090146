<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produk', 50);
            $table->timestamps();
        });

        Schema::table('item', function (Blueprint $table) {
          $table->foreign('id_produk')
                ->references('id')
                ->on('produk')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::tabel('item', function(Blueprint $table) {
          $table->dropForeign('item_id_produk_foreign');
        });

        Schema::drop('produk');
    }
}
