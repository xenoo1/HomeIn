<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->id();
            $table->string('nm_rumah');
            $table->string('alamat');
            $table->integer('tipe_rumah');
            $table->integer('harga');
            $table->string('url_gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propertys');
    }
};
