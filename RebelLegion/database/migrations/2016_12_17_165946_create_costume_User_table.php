<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costume_user', function (Blueprint $table) {
            $table->integer('costume_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('costume_id')
                  ->references('id')->on('costumes')
                  ->onDelete('cascade');
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costume_user');
    }
}
