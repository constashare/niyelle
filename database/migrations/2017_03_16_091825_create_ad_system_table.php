<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_system', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand_id');
            $table->index('brand_id');
            $table->string('banner_id');
            $table->index('banner_id');
            $table->string('ad_feed_id');
            $table->index('ad_feed_id');
//            0 = none; 1 = banner only; 2 = ad_feed only; 3 = both;
            $table->tinyInteger('which_ad_type');
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
        Schema::dropIfExists('ad_system');
    }
}
