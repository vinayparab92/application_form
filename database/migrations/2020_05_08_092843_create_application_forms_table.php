<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathername');
            $table->string('mothername');
            $table->date('dateofbirth');
            $table->string('gender');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->string('uid');
            $table->string('paddress1');
            $table->string('paddress2');
            $table->string('paddress3');
            $table->string('pcountry');
            $table->string('pstate');
            $table->string('pcity');
            $table->string('ppincode');
            $table->string('caste');
            $table->string('mobileno');
            $table->string('altno');
            $table->string('email');
            $table->string('certno');
            $table->string('centre');
            $table->string('ssc_board');
            $table->string('ssc_year');
            $table->string('ssc_per');
            $table->string('hsc_board');
            $table->string('hsc_year');
            $table->string('hsc_per');
            $table->string('graduation');
            $table->string('graduation_board');
            $table->string('graduation_year');
            $table->string('graduation_per');
            $table->string('post_graduation');
            $table->string('post_graduation_board');
            $table->string('post_graduation_year');
            $table->string('post_graduation_per');
            $table->string('prelims_17');
            $table->string('mains_17');
            $table->string('interview_17');
            $table->string('prelims_18');
            $table->string('mains_18');
            $table->string('interview_18');
            $table->string('prelims_19');
            $table->string('mains_19');
            $table->string('interview_19');
            $table->string('area');
            $table->string('ph');
            $table->string('disability');
            $table->string('finance_limit');
            $table->string('past_benefit');
            $table->string('scheme');
            $table->string('terms');
            $table->string('password');
            $table->string('password_confirmation');
            $table->tinyInteger('flag')->default('1');
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
        Schema::dropIfExists('application_forms');
    }
}
