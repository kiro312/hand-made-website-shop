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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('user_phone');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->unsignedBigInteger('user_role_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_role_id')->references('id')->on('user_roles')->onDelete('cascade');
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
};
