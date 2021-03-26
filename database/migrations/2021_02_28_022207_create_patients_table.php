<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('telephone')->nullable();
            $table->string('country')->nullable();
            $table->string('zone')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('ward')->nullable();
            $table->string('province')->nullable();
            $table->string('mobile');
            $table->string('gender')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('status')->nullable();
            $table->decimal('lat')->nullable();
            $table->decimal('lon')->nullable();
            $table->string('description')->nullable();

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
        Schema::dropIfExists('patients');
    }
}
