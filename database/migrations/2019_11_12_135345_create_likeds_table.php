<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liked', function (Blueprint $table) {
            $table->increments('id');
            //Foreign key of User
            $table->integer('User_id')->unsigned();
            $table->foreign('User_id')->references('id')->on('user')->onDelete('cascade')->onUpdate('cascade');
            //Foreign key of Comment
            $table->integer('Comment_id')->unsigned();
            $table->foreign('Comment_id')->references('id')->on('comment')->onDelete('cascade')->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liked');
    }
}
