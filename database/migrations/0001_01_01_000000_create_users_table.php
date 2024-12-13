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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 50)->nullable();
            $table->string('surname', 50)->nullable();
            $table->string('middlename', 50)->nullable();
            $table->string('fname', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('section', 50)->nullable();
            $table->string('academic_session', 15)->nullable();
            $table->string('dob', 20)->nullable();
            // $table->string('state', 50)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('monthofentry', 20)->nullable();
            $table->string('classname', 20)->nullable();
            $table->string('placeofbirth', 100)->nullable();
            $table->string('ref_no', 20)->nullable();
            $table->string('slug', 20)->nullable();
            $table->string('lga', 12)->nullable();
            $table->text('images')->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('fathersurname', 30)->nullable();
            $table->string('fathername', 30)->nullable();
            $table->string('fathermiddlename', 30)->nullable();
            $table->string('title', 30)->nullable();
            $table->string('fatherphone', 20)->nullable();
            $table->string('nationality', 30)->nullable();
            $table->string('fatheremployer', 70)->nullable();
            $table->string('fatheremail', 30)->nullable();
            $table->string('fatheraddress')->nullable();
            $table->string('mothersurname', 30)->nullable();
            $table->string('mothertongue', 50)->nullable();
            $table->string('mothername', 30)->nullable();
            $table->string('mothermiddlename', 30)->nullable();
            $table->string('mothertitle', 30)->nullable();
            $table->string('motherphone', 20)->nullable();
            $table->string('mothernationality', 30)->nullable();
            $table->string('motheremployer', 30)->nullable();
            $table->string('motheremail', 30)->nullable();
            $table->string('motheraddress', 100)->nullable();
            $table->string('lastschool', 100)->nullable();
            $table->string('classprevadmin', 100)->nullable();
            $table->string('classprevpassed', 100)->nullable();
            $table->string('evidofschpayment', 100)->nullable();
            $table->string('transfercertno', 100)->nullable();
            $table->text('reportcardof_prevschool')->nullable();
            $table->string('whobring')->nullable();
            $table->string('whotoatten', 50)->nullable();
            $table->string('stayafclosingtime', 40)->nullable();
            $table->string('toys', 190)->nullable();
            $table->string('playwith', 190)->nullable();
            $table->string('gameinterst', 100)->nullable();
            $table->string('landmark', 100)->nullable();
            $table->string('relationship', 30)->nullable();
            $table->string('howhr', 30)->nullable();
            $table->string('playful', 30)->nullable();
            $table->string('quiet', 30)->nullable();
            $table->string('gifted', 30)->nullable();
            $table->string('phy_chall', 30)->nullable();
            $table->string('livingwith', 30)->nullable();
            $table->string('otherinfo')->nullable();
            // $table->string('relationship', 30)->nullable();
            $table->string('maritalstatus', 50)->nullable();
            $table->string('schooladdress')->nullable();
            $table->string('aboutus', 30)->nullable();
            $table->string('birthcert')->nullable();
            $table->string('status')->nullable();
            $table->string('livingwith1')->nullable();
            
            $table->string('religion', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('term', 100)->nullable();
            $table->string('role', 20)->nullable();
            $table->string('semergeno', 20)->nullable();
            $table->string('femergeno', 20)->nullable();
            $table->string('regnumber', 20)->nullable();
            $table->string('password_resets')->nullable();
            
            $table->string('medicalcondition1', 300)->nullable();
            $table->string('medicalcondition2', 300)->nullable();
           

           ;
            $table->string('doctorname', 50)->nullable();
            $table->string('doctoraddress', 100)->nullable();
            $table->string('doctorphone', 20)->nullable();
            $table->text('immune')->nullable();
            $table->string('promotion')->nullable();
            $table->string('assign')->nullable();
            $table->string('assign1')->nullable();
            $table->string('staybeyond')->nullable();
            $table->string('attendedtime')->nullable();
            $table->string('ref_no1')->nullable();
            $table->string('staybeyondtime')->nullable();
            $table->string('medreports')->nullable();
            // $table->string('livingwith')->nullable();
            $table->string('handicap')->nullable();
            $table->string('sighted')->nullable();
            $table->string('speech')->nullable();
            $table->string('hearing')->nullable();
            $table->string('hearing1')->nullable();
            $table->string('hearing2')->nullable();
            $table->string('ortho')->nullable();
            $table->string('ortho1')->nullable();
            $table->string('mentally1')->nullable();
            $table->string('mentally')->nullable();
            $table->string('mentally2')->nullable();
            $table->text('payment_evid')->nullable();
            // $table->string('quiet')->nullable();
            // $table->string('gifted')->nullable();
            $table->string('gifted1')->nullable();
            $table->string('started_school')->nullable();
            $table->string('school_name')->nullable();
            $table->string('class_attended')->nullable();
            $table->string('transfer_cert')->nullable();
            $table->string('report_card')->nullable();
            // $table->string('classname')->nullable();
            $table->string('tobeattended')->nullable();
            $table->string('attended')->nullable();
            $table->string('cistern')->nullable();
            $table->string('cistern1')->nullable();
            $table->string('game')->nullable();
            // $table->string('toys')->nullable();
            $table->string('att')->nullable();
            $table->string('playwith1')->nullable();
            $table->string('playwith2')->nullable();
            $table->string('playwith3')->nullable();
            $table->string('playwith4')->nullable();
            $table->string('playwith5')->nullable();

            $table->string('spent')->nullable();
            $table->string('playful1')->nullable();
            

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
