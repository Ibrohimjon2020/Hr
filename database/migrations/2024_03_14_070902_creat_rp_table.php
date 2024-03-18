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
        Schema::create('rp', function (Blueprint $table) {
            $table->id();
            $table->string('bolim_ru')->nullable();
            $table->string('bolim_uz')->nullable();
            $table->string('kod')->nullable();
            $table->string('hudud')->nullable();
            $table->string('harajat_turi_kodi')->nullable();
            $table->string('harajat_nomi')->nullable();
            $table->string('personal_tur_kodi')->nullable();
            $table->string('personal_tur_nomi')->nullable();
            $table->string('personal_toifasi')->nullable();
            $table->string('lavozim_kodi')->nullable();
            $table->string('raxbarlik_kodi')->nullable();
            $table->string('lavozim_uz')->nullable();
            $table->string('lavozim_ru')->nullable();
            $table->string('fact')->nullable();
            $table->string('diap')->nullable();
            $table->string('factkat')->nullable();
            $table->string('kategoriya_2')->nullable();
            $table->string('tabel')->nullable();
            $table->string('fio')->nullable();
            $table->string('staj')->nullable();
            $table->date('ishga_kirgan_sana')->format('d/m/Y')->nullable();
            $table->date('tugilgan_sana')->format('d/m/Y')->nullable();
            $table->integer('yoshi')->nullable();
            $table->string('jinsi')->nullable();
            $table->string('millati')->nullable();
            $table->string('malumoti')->nullable();
            $table->integer('kod3')->nullable();
            $table->string('oy')->nullable();
            $table->integer('yil')->nullable();
            $table->string('viloyat')->nullable();
            $table->string('shaxar')->nullable();
            $table->string('tuman')->nullable();
            $table->string('mfy_kocha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rp_tabel');
    }
};
