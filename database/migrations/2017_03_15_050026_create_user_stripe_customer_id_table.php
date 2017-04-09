<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStripeCustomerIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_stripe_customer_data', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
            $table->bigIncrements('id');
	        $table->string('user_id');
	        $table->string('stripe_customer_id');
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
        Schema::dropIfExists('user_stripe_customer_data');
    }
}
