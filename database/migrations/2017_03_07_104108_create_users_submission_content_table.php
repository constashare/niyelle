<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSubmissionContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_submission_content', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('challenge_id');
            $table->string('video_id')->nullable();
            $table->string('image_id')->nullable();
            $table->timestamps();
	
	        $table->foreign('user_id')
		        ->references('user_id')
		        ->on('users')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('challenge_id')
		        ->references('challenge_id')
		        ->on('user_challenges')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('video_id')
		        ->references('video_id')
		        ->on('user_video')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('image_id')
		        ->references('image_id')
		        ->on('user_image')
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
        Schema::dropIfExists('users_submission_content');
    }
}
