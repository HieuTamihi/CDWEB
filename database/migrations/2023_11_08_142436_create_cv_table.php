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
            $table->integer('customer_id')->unique();
            $table->string('full_name');
            $table->string('avatar')->nullable();
            $table->string('enjoy_tech');           
            $table->string('apply_position');
            $table->string('email')->unique();
            $table->integer('phone_number');
            $table->string('gender');
            $table->string('exp_work')->nullable();
            $table->string('skills')->nullable();
            $table->string('infor_order');
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
