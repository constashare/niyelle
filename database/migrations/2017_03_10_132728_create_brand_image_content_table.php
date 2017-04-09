<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandImageContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_image_content', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('brand_id');
            $table->string('brand_image_id')->unique();
            $table->index('brand_image_id');
            $table->string('brand_image_url');
            $table->string('brand_thumbnail_url');
            $table->string('brand_image_title');
            $table->string('brand_image_hashtag');
            $table->string('brand_image_category');
            $table->longText('brand_image_description');
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
        Schema::dropIfExists('brand_image_content');
    }
}
