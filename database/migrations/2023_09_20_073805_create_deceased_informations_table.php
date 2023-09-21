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
        Schema::create('deceased_informations', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->date('dob');
            $table->string('age');
            $table->string('sex');
            $table->string('height');
            $table->string('weight');
            $table->string('address');
            $table->string('occupation');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('civilStatus');
            $table->string('fathersName');
            $table->string('mothersMaidenName');
            $table->string('placeOfDeath');
            $table->string('timeOfDeath');
            $table->string('dateOfDeath');
            $table->string('causeOfDeath')->nullable();
            $table->string('addressOfCemetery');
            $table->string('placeOfViewing')->nullable();
            $table->string('dateOfInterment');
            $table->string('timeOfInterment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deceased_information');
    }
};
