<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandAdditionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_additional', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
	        $table->string('brand_id');
	        $table->string('brand_website_link')->nullable();
	        $table->string('brand_facebook_link')->nullable();
	        $table->string('brand_twitter_link')->nullable();
	        $table->string('brand_google_plus_link')->nullable();
	        $table->string('brand_instagram_name')->nullable();
	        $table->string('brand_hashtag')->nullable();
	        $table->string('brand_mentiontag')->nullable();
	        $table->string('phone_number')->nullable();
	        $table->string('street_address')->nullable();
	        $table->string('city')->nullable();
	        $table->string('state')->nullable();
	        $table->string('zip_code')->nullable();
	        $table->string('location_longitude')->nullable();
	        $table->string('location_latitude')->nullable();
            $table->timestamps();
	
	        $table->foreign('brand_id')
		        ->references('brand_id')
		        ->on('brands')
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
        Schema::dropIfExists('brand_additional');
    }
}
