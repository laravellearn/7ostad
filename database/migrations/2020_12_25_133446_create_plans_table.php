<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('target_id');
            $table->foreign('target_id')->references('id')->on('targets')->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('day','25');
            $table->string('date','10');

            $table->unsignedBigInteger('operation_id1')->nullable();
            $table->foreign('operation_id1')->references('id')->on('operations')->onDelete('cascade');
            $table->unsignedBigInteger('book_id1')->nullable();
            $table->foreign('book_id1')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('topic_id1')->nullable();
            $table->foreign('topic_id1')->references('id')->on('topics')->onDelete('cascade');

            $table->unsignedBigInteger('operation_id2')->nullable();
            $table->foreign('operation_id2')->references('id')->on('operations')->onDelete('cascade');
            $table->unsignedBigInteger('book_id2')->nullable();
            $table->foreign('book_id2')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('topic_id2')->nullable();
            $table->foreign('topic_id2')->references('id')->on('topics')->onDelete('cascade');

            $table->unsignedBigInteger('operation_id3')->nullable();
            $table->foreign('operation_id3')->references('id')->on('operations')->onDelete('cascade');
            $table->unsignedBigInteger('book_id3')->nullable();
            $table->foreign('book_id3')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('topic_id3')->nullable();
            $table->foreign('topic_id3')->references('id')->on('topics')->onDelete('cascade');

            $table->unsignedBigInteger('operation_id4')->nullable();
            $table->foreign('operation_id4')->references('id')->on('operations')->onDelete('cascade');
            $table->unsignedBigInteger('book_id4')->nullable();
            $table->foreign('book_id4')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('topic_id4')->nullable();
            $table->foreign('topic_id4')->references('id')->on('topics')->onDelete('cascade');

            $table->unsignedBigInteger('operation_id5')->nullable();
            $table->foreign('operation_id5')->references('id')->on('operations')->onDelete('cascade');
            $table->unsignedBigInteger('book_id5')->nullable();
            $table->foreign('book_id5')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('topic_id5')->nullable();
            $table->foreign('topic_id5')->references('id')->on('topics')->onDelete('cascade');

            $table->unsignedBigInteger('operation_id6')->nullable();
            $table->foreign('operation_id6')->references('id')->on('operations')->onDelete('cascade');
            $table->unsignedBigInteger('book_id6')->nullable();
            $table->foreign('book_id6')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('topic_id6')->nullable();
            $table->foreign('topic_id6')->references('id')->on('topics')->onDelete('cascade');

            $table->unsignedBigInteger('operation_id7')->nullable();
            $table->foreign('operation_id7')->references('id')->on('operations')->onDelete('cascade');
            $table->unsignedBigInteger('book_id7')->nullable();
            $table->foreign('book_id7')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('topic_id7')->nullable();
            $table->foreign('topic_id7')->references('id')->on('topics')->onDelete('cascade');

            $table->unsignedBigInteger('operation_id8')->nullable();
            $table->foreign('operation_id8')->references('id')->on('operations')->onDelete('cascade');
            $table->unsignedBigInteger('book_id8')->nullable();
            $table->foreign('book_id8')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('topic_id8')->nullable();
            $table->foreign('topic_id8')->references('id')->on('topics')->onDelete('cascade');

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
        Schema::dropIfExists('plans');
    }
}
