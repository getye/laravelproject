<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->default("Student");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('freshman', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('sex');
            $table->string('status');
            $table->string('program');
            $table->string('department');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('approval')->default("Pending");
            $table->string('cv');
        });

        Schema::create('staff', function (Blueprint $table) {
            $table->string('ID');
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('Gender');
            $table->string('AcRank');
            $table->string('Role');
            $table->string('Phone');
            $table->string('Email');
            $table->string('Profile');
        });

        Schema::create('student', function (Blueprint $table) {
            $table->string('ID');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('Grade'); 
            $table->string('Section');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('freshman');
        Schema::dropIfExists('staff');
        Schema::dropIfExists('student');
    }
};
