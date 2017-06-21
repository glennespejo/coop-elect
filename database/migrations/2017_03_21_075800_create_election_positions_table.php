<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectionPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('election_id')->unsigned();
            $table->foreign('election_id')->references('id')->on('elections')->onDelete('cascade');;
            $table->string('position_name');
            $table->integer('limit')->default(1)->unsigned();
            $table->integer('order')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('election_positions');
    }
}
