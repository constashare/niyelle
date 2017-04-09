<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_details', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('challenge_id');
            $table->integer('challenge participants')->unsigned();
            $table->timestamps();
	
	        $table->foreign('challenge_id')
		        ->references('challenge_id')
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
        Schema::dropIfExists('challenge_details');
    }
}
