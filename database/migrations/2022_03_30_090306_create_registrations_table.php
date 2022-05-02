<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
  
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("studentid");
            $table->string("fullname");
            $table->string("nationalid");
            $table->string("serialnumber");
            $table->string("modelname");
            $table->string("mobile");
         $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
};

