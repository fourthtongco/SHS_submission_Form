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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('current_grade_level');
            $table->string('incoming_grade_level');
            $table->string('first_name');
            $table->string('middle_name');  
            $table->string('last_name');
            $table->string('preferred_strand');
            $table->string('contact_number');
            $table->string('email');
            $table->timestamps();
        });
    }

    //Current Grade Level:
     // Incoming Grade Level:

     // First Name:
     // Middle Name:
     // Last Name:

     // Preferred Strand:
     // Contact Number:
     // Email:

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
