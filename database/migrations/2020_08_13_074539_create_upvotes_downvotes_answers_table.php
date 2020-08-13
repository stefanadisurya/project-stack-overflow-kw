<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpvotesDownvotesAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upvotes_downvotes_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('point');

            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('profile_id')->on('profiles');

            $table->unsignedBigInteger('answer_id');
            $table->foreign('answer_id')->references('answer_id')->on('answers');
            
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
        Schema::dropIfExists('upvotes_downvotes_answers');
    }
}