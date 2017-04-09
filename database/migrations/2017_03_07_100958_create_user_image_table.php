<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_image', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
	        $table->bigIncrements('id');
	        $table->string('user_id');
	        $table->string('image_id')->unique();
	        $table->index('image_id');
	        $table->string('image_URL')->unique();
	        $table->string('image_thumbnail_URL');
	        $table->string('title');
	        $table->text('description');
	        $table->string('image_hashtag');
	        $table->string('category');
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
        Schema::dropIfExists('user_image');
    }
}
