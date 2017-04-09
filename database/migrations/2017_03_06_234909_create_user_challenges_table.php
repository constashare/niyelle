<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_challenges', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
	        $table->bigIncrements('id');
//	        $table->string('brand_id');
//	        $table->index('brand_id');
	        $table->string('user_id');
	        $table->index('user_id');
	        $table->string('challenge_id');
	        $table->index('challenge_id');
	        $table->tinyInteger('content_type');
	        $table->dateTime('challenge_start_time');
	        $table->dateTime('challenge_end_time');
	        $table->date('challenge_start_date');
	        $table->date('challenge_end_date');
	        $table->string('challenge_name');
	        $table->string('challenge_description');
	        $table->tinyInteger('participated')->unsigned()->default('0');
            $table->timestamps();
	
	        $table->foreign('user_id')
		        ->references('user_id')
		        ->on('users')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_challenges');
    }
}
