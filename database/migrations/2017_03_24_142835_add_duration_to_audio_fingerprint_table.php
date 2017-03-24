<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDurationToAudioFingerprintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('audio_fingerprint', function (Blueprint $table) {
          $table->increments('audioId');
          $table->string('hashtag');
          $table->string('duration')->nullable();
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
        Schema::table('audio_fingerprint', function (Blueprint $table) {
            //
        });
    }
}
