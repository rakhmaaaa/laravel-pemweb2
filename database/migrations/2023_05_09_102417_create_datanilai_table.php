<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datanilai', function (Blueprint $table) {
            $table->id();
            $table->string('siswa_id');
            $table->double('nilai_rapot');
            $table->double('nilai_hadir');
            $table->double('ekstrakulikuler');
            $table->double('organisasi');
            $table->double('tingkah_laku');
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
        Schema::dropIfExists('datanilai');
    }
};
