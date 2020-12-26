<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->timestamps();
        });

        Schema::create('grades', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('study_id')->unsigned();
            $table->foreign('study_id')->references('id')->on('studies')->onDelete('cascade');

            $table->string('name',100);
            $table->timestamps();
        });

        Schema::create('lessongroups', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('grade_id')->unsigned();
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');

            $table->string('name',100);
            $table->timestamps();
        });

        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('lessongroups')->onDelete('cascade');

            $table->string('name',100);
            $table->string('color',45);

            $table->timestamps();
        });

        Schema::create('topics', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->string('name',100);
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
        Schema::dropIfExists('studies');
        Schema::dropIfExists('grades');
        Schema::dropIfExists('lessongroups');
        Schema::dropIfExists('books');
        Schema::dropIfExists('topics');
    }
}
