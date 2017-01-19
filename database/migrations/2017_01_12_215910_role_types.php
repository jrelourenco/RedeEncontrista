<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

        });

        DB::table('role_types')->insert(['name' => 'Encontrista']);
        DB::table('role_types')->insert(['name' => 'Coordenador']);
        DB::table('role_types')->insert(['name' => 'Secretario']);
        DB::table('role_types')->insert(['name' => 'Tesoureiro']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_types');
    }
}
