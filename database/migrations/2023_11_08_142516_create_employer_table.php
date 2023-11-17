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
        Schema::create('employer', function (Blueprint $table) {
            $table->id();
            $table->integer('User_id');
            $table->text('Website')->nullable();
            $table->text('Infor')->nullable();
            $table->text('Responsibility')->nullable();
            $table->text('Welfare')->nullable();
            $table->string('name_company')->nullable();
            $table->string('address');
            $table->string('image');
            $table->string('email')->nullable();
            $table->string('phone_number');
            $table->integer('featured')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer');
    }
};
