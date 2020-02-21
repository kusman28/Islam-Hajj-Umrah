<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmrahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umrah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('iqama_no')->nullable();
            $table->string('iqama_exp_date')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('passport_exp_date')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->string('email')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('job')->nullable();
            $table->string('company')->nullable();
            $table->string('contact_company')->nullable();
            $table->string('picture')->nullable();
            $table->string('iqama_pic')->nullable();
            $table->string('passport_pic')->nullable();
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('umrah');
    }
}
