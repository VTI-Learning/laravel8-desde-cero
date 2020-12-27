<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id(); //integer unsigned autoincrement
            $table->string('name'); //varchar 255
            $table->string('email')->unique();//varchar 255, unico
            $table->string('slug');
            $table->timestamp('email_verified_at')->nullable();//fecha verificar, permite vacio
            $table->string('password');//varchar 255
            $table->rememberToken();//varchar 100, poder mantener la sesion iniciada
            $table->timestamps();// created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
