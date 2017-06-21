<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectionTallyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_tally', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('election_id')->unsigned();
            $table->foreign('election_id')->references('id')->on('elections')->onDelete('cascade');
            $table->integer('candidate_id')->unsigned();
            $table->foreign('candidate_id')->references('id')->on('election_candidate')->onDelete('cascade');
            $table->integer('total_count')->default(0);
            $table->boolean('is_winner')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('election_tally');
    }
}
