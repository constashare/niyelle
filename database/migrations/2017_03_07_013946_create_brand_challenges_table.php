<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_challenges', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
	        $table->bigIncrements('id');
	        $table->string('brand_id');
	        $table->index('brand_id');
	        $table->tinyInteger('has_prize')->unsigned();
	        $table->string('challenge_id')->unique();
	        $table->tinyInteger('content_type');
	        $table->dateTime('challenge_start_time');
	        $table->dateTime('challenge_end_time');
	        $table->date('challenge_start_date');
	        $table->date('challenge_end_date');
	        $table->string('challenge_name');
	        $table->string('challenge_description');
	        $table->string('challenge_hashtag');
//	        $table->bigInteger('participated')->unsigned()->default('0');
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
        Schema::dropIfExists('brand_challenges');
    }
}
