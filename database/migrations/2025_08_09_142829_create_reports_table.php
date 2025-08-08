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
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Type_report', 50);
            $table->string('Reporting_period', 30);
            $table->text('Description');
            $table->date('Creation_date');
            $table->string('Total_absence',);
            $table->string('Total_attendance');
            $table->string('Generated_By');
            $table->string('Status', 15);

            $table->foreign('employees_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('departament_id')->references('id')->
            on('departament')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
