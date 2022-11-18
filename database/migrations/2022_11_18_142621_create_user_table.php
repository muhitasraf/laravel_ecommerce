<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name',128);
            $table->string('eamil',128)->unique();
            $table->string('phone_number',32)->unique();
            $table->string('password',32);
            $table->bigInteger('rewards')->default(0);
            $table->tinyInteger('email_verified_at')->nullable();
            $table->string('email_verified_token',100)->nullable();
            $table->string('facebook_id',32)->nullable();
            $table->string('google_id',32)->nullable();
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
        Schema::dropIfExists('user');
    }
}
