<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table){
            
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            });
        
        Schema::table('articles', function($table)
        {
            
            $table->foreign('user_id', 'fk_user_id')
                ->references('id')
                ->on('users');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
