<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamCoordinatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_coordinators', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('group_id')->unsigned();
            $table->string('pastoral_year');
            $table->integer('coordinator')->unsigned();
            $table->integer('secretary')->unsigned();
            $table->integer('treasurer')->unsigned();
            $table->unique(['group_id', 'pastoral_year']);

            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('coordinator')->references('id')->on('encontristas');
            $table->foreign('secretary')->references('id')->on('encontristas');
            $table->foreign('treasurer')->references('id')->on('encontristas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_coordinators');
    }
}
