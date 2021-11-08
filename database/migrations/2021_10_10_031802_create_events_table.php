<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar');
            $table->string('video')->nullable();
            $table->string('deskripsi');
            $table->time('waktu');
            $table->date('tanggal');
            $table->date('registrasi');
            $table->date('deadline');
            $table->string('link_zoom');
            $table->string('link_event');
            $table->string('event_organizer');
            $table->string('email');
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('benefit');
            $table->string('eligible');
            $table->string('status');
            $table->foreignId('id_jenis');
            $table->foreignId('id_category');
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
        Schema::dropIfExists('events');
    }
}
