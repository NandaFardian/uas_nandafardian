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
        Schema::create('alatberats', function (Blueprint $table) {
            $table->id();
            $table->string('nm_alat');
            $table->bigInteger('merks_id');
            $table->string('tahun');
            $table->string('jumlah');
            $table->string('harga');
            $table->string('foto')->default('default.png');
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
        Schema::dropIfExists('alatberats');
    }
};
