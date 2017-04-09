<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWebStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_page_stats', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('page_id');
            $table->ipAddress('ip_address');
            $table->string('referrer')->default(' ');
            $table->bigInteger('views')->default('0');
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
        Schema::dropIfExists('user_page_stats');
    }
}
	
	