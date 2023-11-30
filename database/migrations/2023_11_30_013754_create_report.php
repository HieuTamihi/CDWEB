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
        Schema::drop('report', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->string('content');
            $table->timestamps();
        });
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('job_id');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::table('recruitment', function (Blueprint $table) {
            $table->integer('CV_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
