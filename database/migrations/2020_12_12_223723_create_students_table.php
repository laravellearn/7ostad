<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')->references('id')->on('studies')->onDelete('cascade');
            $table->unsignedBigInteger('study_id');
            $table->foreign('study_id')->references('id')->on('studies')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('stid',45)->unique();
            $table->string('fname',200);
            $table->string('lname',400);
            $table->string('national_code',12);
            $table->enum('gender', ['man', 'woman']);
            $table->string('birthdate',45);
            $table->string('mobile',11);
            $table->string('phone',15)->nullable();
            $table->string('email',300)->unique()->nullable();
            $table->string('school',100)->nullable();
            $table->text('address');
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->string('zipcode',10)->nullable();
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
        Schema::dropIfExists('students');
    }
}
