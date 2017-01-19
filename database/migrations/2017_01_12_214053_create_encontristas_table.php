<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncontristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encontristas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->string('nickname');
            $table->string('email')->unique();
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('password');
            $table->rememberToken();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encontristas');
    }
}
