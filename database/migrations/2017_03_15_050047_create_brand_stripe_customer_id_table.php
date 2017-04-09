<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandStripeCustomerIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_stripe_customer_data', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
	        $table->string('brand_id');
	        $table->string('stripe_customer_id');
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
        Schema::dropIfExists('brand_stripe_customer_data');
    }
}
