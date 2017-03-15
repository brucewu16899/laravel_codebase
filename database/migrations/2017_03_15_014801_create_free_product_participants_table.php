<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFreeProductParticipantsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_product_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('freeproduct_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('status', array_keys(trans('globals.participant_status')));
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('freeproduct_id')->references('id')->on('freeproducts');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('free_product_participants');
    }
}
