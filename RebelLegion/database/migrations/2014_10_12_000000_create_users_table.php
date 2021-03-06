<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->string('facebookURL');
            $table->boolean('isPersonalDataVisible');
            $table->boolean('isAdmin');
            $table->string('position');
            $table->string('status');
            $table->string('internationalRebelLegionURL');
            $table->string('avatarURL')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
