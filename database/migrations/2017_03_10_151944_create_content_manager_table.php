<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_manager', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('user_video_content_id');
	        $table->index('user_video_content_id');
            $table->string('user_image_content_id');
	        $table->index('user_image_content_id');
            $table->string('brand_video_content_id');
	        $table->index('brand_video_content_id');
            $table->string('brand_image_content_id');
            $table->index('brand_image_content_id');
            $table->timestamps();
	
	        $table->foreign('user_video_content_id')
		        ->references('video_id')
		        ->on('user_video')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('user_image_content_id')
		        ->references('image_id')
		        ->on('user_image')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('brand_video_content_id')
		        ->references('brand_video_id')
		        ->on('brand_video_content')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
	        $table->foreign('brand_image_content_id')
		        ->references('brand_image_id')
		        ->on('brand_image_content')
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
        Schema::dropIfExists('content_manager');
    }
}
