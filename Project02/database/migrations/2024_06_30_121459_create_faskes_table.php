<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('faskes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('nama_pengelola', 45);
            $table->string('alamat', 100);
            $table->string('website', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->unsignedInteger('kabkota_id');
            $table->integer('rating')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->unsignedInteger('jenis_faskes_id');
            $table->unsignedInteger('kategori_id');
            $table->timestamps();

            $table->foreign('jenis_faskes_id')->references('id')->on('jenis_faskes')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faskes');
    }
};

