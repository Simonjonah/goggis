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
        Schema::create('teacherofweeks', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('designation')->nullable();
            $table->string('role')->nullable();
            $table->text('messages')->nullable();
            $table->text('images')->nullable();
            $table->text('dayac')->nullable();
            $table->text('monthsac')->nullable();
            $table->text('yrsac')->nullable();
            $table->string('status')->nullable();
            $table->string('ref_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacherofweeks');
    }
};
