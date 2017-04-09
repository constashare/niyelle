<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
	        $table->bigIncrements('id');
	        $table->string('user_id');
	        $table->index('user_id');
	        $table->string('brand_id')->unique();
	        $table->index('brand_id');
	        $table->string('brand_name');
	        $table->index('brand_name');
	        $table->string('brand_email')->unique();
	        $table->longText('brand_about')->nullable();
	        $table->rememberToken();
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
        Schema::dropIfExists('brands');
    }
}
