<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
	        $table->bigIncrements('id');
	        $table->string('brand_id')->nullable();
	        $table->string('user_id')->nullable();
	        $table->string('stripe_customer_id');
	        $table->decimal('payment_amount', 19, 2);
	        $table->decimal('payment_amount_GAAP', 19, 4);
	        $table->string('transaction_type');
            $table->timestamps();
	
	        $table->foreign('brand_id')
		        ->references('brand_id')
		        ->on('brands')
		        ->onDelete('restrict')
		        ->onUpdate('cascade');
	
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
        Schema::dropIfExists('billing');
    }
}
