<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendance_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('Creation_date');
            $table->time('Time_in');
            $table->time('Time_exit');
            $table->time('Hours_worked');
            $table->time('Overtime');

            $table->foreign('employees_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('charges_id')->references('id')->
            on('charges')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_registrations');
    }
};
