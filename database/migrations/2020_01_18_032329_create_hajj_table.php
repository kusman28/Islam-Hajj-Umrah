<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHajjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajj', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('gender');
            $table->string('birthday');
            $table->string('iqama_no');
            $table->string('iqama_exp_date');
            $table->string('passport_no');
            $table->string('passport_exp_date');
            $table->string('mobile_no');
            $table->string('whatsapp_no');
            $table->string('email');
            $table->string('nationality');
            $table->string('address');
            $table->string('city');
            $table->string('job');
            $table->string('company');
            $table->string('contact_company');
            $table->string('picture');
            $table->string('iqama_pic');
            $table->string('passport_pic');
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
        Schema::dropIfExists('hajj');
    }
}
