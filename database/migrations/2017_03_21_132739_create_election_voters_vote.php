<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectionVotersVote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_voters_vote', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voters_id')->unsigned();
            $table->foreign('voters_id')->references('id')->on('election_voters')->onDelete('cascade');
            $table->longText('votes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('election_voters_vote');
    }
}
