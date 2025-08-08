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
        Schema::create('charges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_chargues', 100);
            $table->string('Type_charges', 40);
            $table->string('Specific_qualification', 80);
            $table->text('Experience_work');
            $table->text('Requeriments');

            $table->foreign('employees_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('departaments_id')->references('id')->
            on('departaments')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('horaries_id')->references('id')->
            on('horaries')->onDelete('cascade')->onUpdate('id');

            /**
             * Incluir boton para ingresar pdf
             */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
