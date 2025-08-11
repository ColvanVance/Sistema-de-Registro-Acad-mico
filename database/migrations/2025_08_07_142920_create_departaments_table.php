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
        Schema::create('departaments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_departament');
            $table->string('location', 50);
            $table->string('responsible_employee');
            $table->string('state', 30);
            $table->integer('capacity_staff');

            $table->foreign('employees_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('bosses_id')->references('id')->
            on('bosses')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departaments');
    }
};
