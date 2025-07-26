<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nRoom');
            $table->string('nSchool')->unique();
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->enum('schoolType', ['Pública', 'Privada'])->default('Pública'); // 'public' or 'private'
	        $table->enum('schoolLevel', ['Iº Ciclo', 'IIº Ciclo'])->default('Iº Ciclo');
	        $table->unsignedBigInteger('id_provinces');
	        $table->unsignedBigInteger('id_counties');
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
        Schema::dropIfExists('schools');
    }
}
