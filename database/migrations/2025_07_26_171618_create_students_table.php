<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['Feminino', 'Masculino', 'Outro'])->default('Outro');
            $table->string('process_number')->unique();
	        $table->unsignedBigInteger('id_schools');
	        $table->unsignedBigInteger('id_provinces');
	        $table->unsignedBigInteger('id_counties');
	        $table->foreign('id_schools')->references('id')->on('schools')->onDelete('cascade');
	        $table->foreign('id_provinces')->references('id')->on('provinces')->onDelete('cascade');
	        $table->foreign('id_counties')->references('id')->on('counties')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
