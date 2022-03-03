<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo_registration', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name', 60);
            $table->text('phone');
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->string('password');
            $table->text('nationality')->nullable();
            $table->text('gender')->nullable();
            $table->text('hobby')->nullable();
            $table->timestamps(); //created at ,updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demo_registration');
    }
}
