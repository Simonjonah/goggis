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
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('academic_session')->nullable();
            $table->string('section')->nullable();
            $table->string('type')->nullable();
            $table->string('classname')->nullable();
            $table->string('pins')->nullable();
            $table->string('nextterm')->nullable();
            $table->string('term')->nullable();
            $table->string('regnumber')->nullable();
            $table->string('headteacher_comment')->nullable();
            
            $table->string('mentalalert1', 5)->nullable();
            $table->string('mentalalert2', 5)->nullable();
            $table->string('mentalalert3', 5)->nullable();
            $table->string('mentalalert4', 5)->nullable();
            $table->string('mentalalert5', 5)->nullable();

            $table->string('punt1', 5)->nullable();
            $table->string('punt2', 5)->nullable();
            $table->string('punt3', 5)->nullable();
            $table->string('punt4', 5)->nullable();
            $table->string('punt5', 5)->nullable();

            $table->string('respect1', 5)->nullable();
            $table->string('respect2', 5)->nullable();
            $table->string('respect3', 5)->nullable();
            $table->string('respect4', 5)->nullable();
            $table->string('respect5', 5)->nullable();


            $table->string('neat1', 5)->nullable();
            $table->string('neat2', 5)->nullable();
            $table->string('neat3', 5)->nullable();
            $table->string('neat4', 5)->nullable();
            $table->string('neat5', 5)->nullable();

            $table->string('polite1', 5)->nullable();
            $table->string('polite2', 5)->nullable();
            $table->string('polite3', 5)->nullable();
            $table->string('polite4', 5)->nullable();
            $table->string('polite5', 5)->nullable();

            $table->string('honesty1', 5)->nullable();
            $table->string('honesty2', 5)->nullable();
            $table->string('honesty3', 5)->nullable();
            $table->string('honesty4', 5)->nullable();
            $table->string('honesty5', 5)->nullable();


            $table->string('relationship1', 5)->nullable();
            $table->string('relationship2', 5)->nullable();
            $table->string('relationship3', 5)->nullable();
            $table->string('relationship4', 5)->nullable();
            $table->string('relationship5', 5)->nullable();


            $table->string('williness1', 5)->nullable();
            $table->string('williness2', 5)->nullable();
            $table->string('williness3', 5)->nullable();
            $table->string('williness4', 5)->nullable();
            $table->string('williness5', 5)->nullable();

            $table->string('teamspirit1', 5)->nullable();
            $table->string('teamspirit2', 5)->nullable();
            $table->string('teamspirit3', 5)->nullable();
            $table->string('teamspirit4', 5)->nullable();
            $table->string('teamspirit5', 5)->nullable();

            $table->string('verbal1', 5)->nullable();
            $table->string('verbal2', 5)->nullable();
            $table->string('verbal3', 5)->nullable();
            $table->string('verbal4', 5)->nullable();
            $table->string('verbal5', 5)->nullable();

            $table->string('sports1', 5)->nullable();
            $table->string('sports2', 5)->nullable();
            $table->string('sports3', 5)->nullable();
            $table->string('sports4', 5)->nullable();
            $table->string('sports5', 5)->nullable();


            $table->string('arts1', 5)->nullable();
            $table->string('arts2', 5)->nullable();
            $table->string('arts3', 5)->nullable();
            $table->string('arts4', 5)->nullable();
            $table->string('arts5', 5)->nullable();

            $table->string('creativity1', 5)->nullable();
            $table->string('creativity2', 5)->nullable();
            $table->string('creativity3', 5)->nullable();
            $table->string('creativity4', 5)->nullable();
            $table->string('creativity5', 5)->nullable();

            $table->string('music1', 5)->nullable();
            $table->string('music2', 5)->nullable();
            $table->string('music3', 5)->nullable();
            $table->string('music4', 5)->nullable();
            $table->string('music5', 5)->nullable();


            $table->string('dance1', 5)->nullable();
            $table->string('dance2', 5)->nullable();
            $table->string('dance3', 5)->nullable();
            $table->string('dance4', 5)->nullable();
            $table->string('dance5', 5)->nullable();

            $table->string('paint1', 5)->nullable();
            $table->string('paint2', 5)->nullable();
            $table->string('paint3', 5)->nullable();
            $table->string('paint4', 5)->nullable();
            $table->string('paint5', 5)->nullable();

            $table->string('schoolopen')->nullable();
            $table->text('timespresent')->nullable();
            $table->text('timeabsent')->nullable();
     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motors');
    }
};
