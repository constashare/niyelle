<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandVideoContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_video_content', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
	        $table->string('brand_id');
	        $table->string('brand_video_id')->unique();
	        $table->index('brand_video_id');
	        $table->string('brand_video_url');
	        $table->string('brand_thumbnail_url');
	        $table->string('brand_video_title');
	        $table->string('brand_video_hashtag');
	        $table->string('brand_video_category');
	        $table->longText('brand_video_description');
	        $table->tinyInteger('live');
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
        Schema::dropIfExists('brand_video_content');
    }
}
