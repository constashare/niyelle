<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_video', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
	        $table->string('user_id');
	        $table->string('video_id')->unique();
	        $table->index('video_id');
	        $table->string('video_URL')->unique();
	        $table->string('video_streaming_manifest_1_URL');
	        $table->string('video_streaming_manifest_2_URL');
	        $table->string('video_thumbnail_URL');
	        $table->string('video_sprite_vtt_URL');
	        $table->string('title');
	        $table->text('description');
	        $table->string('video_hashtag');
	        $table->string('category');
	        $table->string('video_format');
	        $table->tinyInteger('live');
//	        $table->tinyInteger('ads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_video');
    }
}
