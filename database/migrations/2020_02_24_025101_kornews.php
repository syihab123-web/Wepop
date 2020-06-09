<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kornews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kornews', function (Blueprint $table) {
            $table->increments('id');
            $table->String('judul', 255);
            $table->date('tanggal');
            $table->text('isi');
            $table->String('sumber', 255);
            $table->String('image', 255);
            $table->String('video', 255);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kornews');
    }
}
