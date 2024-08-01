<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('nama_property');
            $table->string('alamat');
            $table->text('deskripsi');
            $table->decimal('harga', 15, 2);
            $table->string('image_path')->nullable();
            $table->date('tanggal');
            $table->enum('tipe_rumah', ['31', '42', '53', '81', '72', '36']);
            $table->integer('kamar_tidur');
            $table->integer('kamar_mandi');
            $table->decimal('luas', 10, 2);
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
        Schema::dropIfExists('properties');
    }
}
