<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prizes', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
	        $table->bigIncrements('id');
	        $table->string('brand_id');
	        $table->index('brand_id');
	        $table->string('prize_id')->unique();
	        $table->string('transaction_id');
	        $table->tinyInteger('type_of_prize')->unsigned();
	        $table->string('prize_title');
	        $table->longText('prize_description');
	        $table->string('prize_image_url_1');
	        $table->string('prize_image_url_2');
	        $table->string('prize_image_url_3');
	        $table->string('prize_thumbnail_url_1');
	        $table->string('prize_thumbnail_url_2');
	        $table->string('prize_thumbnail_url_3');
	        $table->string('prize_gif_url');
	        $table->string('prize_video_url');
	        $table->string('prize_video_thumbnail_url');
	        $table->decimal('cash_value', 19, 2);
	        $table->decimal('gaap_cash_value', 19, 4);
            $table->timestamps();
	
	        $table->foreign('brand_id')
		        ->references('brand_id')
		        ->on('brand_challenges')
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
        Schema::dropIfExists('prizes');
    }
}
