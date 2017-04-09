<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAdditionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_additional', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->increments('id');
	        $table->string('user_id')->unique();
	        $table->index('user_id');
	        $table->string('mentiontag');
	        $table->string('user_hashtag')->nullable();
	        $table->index('user_hashtag');
	        $table->string('date_of_birth');
	        $table->string('gender');
	        $table->string('address_1');
	        $table->string('address_2');
	        $table->string('city/town');
	        $table->string('postal/zip_code');
	        $table->string('country');
	        $table->string('contact_number');
	        $table->string('facebook_profile_url')->unique();
	        $table->string('instagram_profile_name')->unique();
	        $table->string('twitter_profile_url')->unique();
	        $table->string('snapchat_profile_name')->unique();
	        $table->string('occupation');
	        $table->tinyInteger('marital_status');
	        $table->tinyInteger('has_children');
	        $table->tinyInteger('education_level');
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
        Schema::dropIfExists('users_additional');
    }
}
