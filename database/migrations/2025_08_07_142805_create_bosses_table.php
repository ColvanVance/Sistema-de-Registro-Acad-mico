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
        Schema::create('bosses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('Identification', 14)->unique();
            $table->string('Number_phone', 16)->unique();
            $table->string('Mail')->unique();
            $table->string('Nacionality', 60);
            $table->date('Years_old', 2);
            $table->string('Gender', 10);
            $table->string('Marital_states', 12);
            $table->text('Adress');
            $table->string('Emergency_contact_phone', 16);
            $table->string('Emergency_contact_name');
            $table->date('Hire_date');
            $table->date('Start_date_position');
            $table->string('Position', 30);
            $table->string('Departament', 50);
            $table->string('Departament_charge', 50);
            $table->integer('Team_size');
            $table->decimal('Budget_responsibility');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bosses');
    }
};
