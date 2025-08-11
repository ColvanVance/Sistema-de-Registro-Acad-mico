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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('identification', 14)->unique();
            $table->string('number_phone', 16)->unique();
            $table->string('mail')->unique();
            $table->string('nacionality', 60);
            $table->date('years_old', 2);
            $table->string('gender', 10);
            $table->string('marital_states', 12);
            $table->text('adress');
            $table->string('emergency_contact_phone', 16);
            $table->string('emergency_contact_name');
            $table->date('hire_date');
            $table->date('start_date_position');
            $table->string('position', 30);
            $table->string('departament', 50);
            $table->string('departament_charge', 50);
            $table->integer('team_size');
            $table->decimal('budget_responsibility');
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
