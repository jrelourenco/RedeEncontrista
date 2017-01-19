<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('encontrista_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('group_id')->unsigned();

            $table->string('pastoral_year');
            $table->unique(['encontrista_id', 'role_id', 'group_id', 'pastoral_year']);


            $table->foreign('encontrista_id')->references('id')->on('encontristas');
            $table->foreign('role_id')->references('id')->on('role_types');
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
