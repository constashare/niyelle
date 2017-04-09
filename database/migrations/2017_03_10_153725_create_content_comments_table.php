<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_comments', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
	        $table->bigIncrements('id');
	        $table->string('user_video_content_id')->nullable();
	        $table->index('user_video_content_id');
	        $table->string('user_image_content_id')->nullable();
	        $table->index('user_image_content_id');
	        $table->string('brand_video_content_id')->nullable();
	        $table->index('brand_video_content_id');
	        $table->string('brand_image_content_id')->nullable();
	        $table->index('brand_image_content_id');
	        $table->string('user_id_fk');
	        $table->index('user_id_fk');
	        $table->longText('user_comment');
	        $table->dateTime('posted');
	        $table->timestamps();
	
	        $table->foreign('user_video_content_id')
		        ->references('user_video_content_id')
		        ->on('content_manager')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('user_image_content_id')
		        ->references('user_image_content_id')
		        ->on('content_manager')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('brand_video_content_id')
		        ->references('brand_video_content_id')
		        ->on('content_manager')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('brand_image_content_id')
		        ->references('brand_image_content_id')
		        ->on('content_manager')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	
	        $table->foreign('user_id_fk')
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
        Schema::dropIfExists('content_comments');
    }
}
