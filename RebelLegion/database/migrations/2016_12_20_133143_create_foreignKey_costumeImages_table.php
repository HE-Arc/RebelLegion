<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyCostumeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('costumeImages', function (Blueprint $table) {
          $table->integer('costume_id')->unsigned();
          $table->foreign('costume_id')
                ->references('id')->on('costumes')
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
        Schema::table('costumeImages', function (Blueprint $table) {
            //
        });
    }
}
