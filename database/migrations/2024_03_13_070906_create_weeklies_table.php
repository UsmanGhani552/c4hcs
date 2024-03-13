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
        Schema::create('weeklies', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('screened')->default(0);
            $table->integer('presumptive')->default(0);
            $table->integer('positive')->default(0);
            $table->integer('linked')->default(0);
            $table->integer('negitive')->default(0);
            $table->integer('pending')->default(0);
            $table->integer('invalid')->default(0);
            $table->unsignedInteger('month');
            $table->unsignedInteger('year');
            // Add other total fields here
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
        Schema::dropIfExists('weeklies');
    }
};
