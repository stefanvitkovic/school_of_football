<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('players')->onDelete('cascade');
            $table->integer('speed')->nullable()->unsigned()->default(NULL);
            $table->integer('power')->nullable()->unsigned()->default(NULL);
            $table->timestamps();
            $table->integer('creativity')->nullable()->unsigned()->default(NULL);
            $table->integer('dribbling')->nullable()->unsigned()->default(NULL);
            $table->integer('passing')->nullable()->unsigned()->default(NULL);
            $table->integer('finishing')->nullable()->unsigned()->default(NULL);
            $table->integer('defending')->nullable()->unsigned()->default(NULL);
            $table->integer('heading')->nullable()->unsigned()->default(NULL);
            $table->longText('comment')->nullable()->default(NULL);
            $table->integer('category')->nullable()->unsigned()->default(NULL);
            $table->integer('shirt_number')->nullable()->unsigned()->default(NULL);
            $table->foreign('category')->references('id')->on('categories')->onDelete('set null');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abilities');
    }
}
