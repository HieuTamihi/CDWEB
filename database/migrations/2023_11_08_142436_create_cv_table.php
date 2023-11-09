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
        Schema::create('cv', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('Name_CV');
            $table->string('full_name');
            $table->integer('gender');
            $table->string('avatar')->nullable();
            $table->string('apply_position')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->date('Date');
            $table->string('exp_work')->nullable();
            $table->string('School_name')->nullable();
            $table->string('Learn_time')->nullable();
            $table->string('Majors')->nullable();
            $table->string('infor_order')->nullable();
            $table->integer('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv');
    }
};
