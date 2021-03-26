<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //  $table->number('telephone')->nullable();
            //  $table->number('mobile')->nullable();
             $table->string('image')->nullable();
            //  $table->decimal('lat')->nullable();
            //  $table->decimal('lon')->nullable();
            //  $table->string('country');
            //  $table->string('zone');
            //  $table->string('district');
            //  $table->string('city');
            //  $table->string('province');
            //  $table->string('ward')->nullable();
            //  $table->string('description')->nullable();
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
        Schema::dropIfExists('hospitals');
    }
}
