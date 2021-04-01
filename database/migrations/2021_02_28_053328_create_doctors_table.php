<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password');
            $table->string('image')->nullable();
            $table->string('telephone')->nullable();
            $table->string('country')->nullable();
            $table->string('zone')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('ward')->nullable();
            $table->string('province')->nullable();
            $table->string('mobile')->nullable();
            $table->string('gender')->nullable();
            // $table->boolean('status')->default(false);
            $table->decimal('lat')->nullable();
            $table->decimal('lon')->nullable();
            $table->string('description')->nullable();
           // $table->string('doctor_card');
            $table->foreignid('specialist_id');
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
        Schema::dropIfExists('doctors');
    }
}
