<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdspacesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adspaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('adblock_id')->index();
            $table->integer('order')->default(0);
            $table->string('position')->unique();
            $table->string('route');
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
        Schema::drop('adspaces');
    }
}
