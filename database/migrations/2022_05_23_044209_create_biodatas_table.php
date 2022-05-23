<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->string('nama', 36);
            $table->string('tanggal_lahir', 36);
            $table->text('alamat');
            $table->string('jenis_kelamin', 1);
            $table->string('no_hp', 15);
            $table->string('email', 36);
            $table->string('jurusan', 36);
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
        Schema::dropIfExists('biodatas');
    }
}
