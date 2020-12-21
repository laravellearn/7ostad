<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtargets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('target_id')->unsigned();
            $table->foreign('target_id')->references('id')->on('targets')->onDelete('cascade');

            $table->unsignedBigInteger('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->unsignedBigInteger('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');

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
        Schema::dropIfExists('subtargets');
    }
}
