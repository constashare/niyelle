<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminGlobalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_global_data', function (Blueprint $table) {
	        $table->engine = 'InnoDB';
//            $table->bigIncrements('id');
            $table->bigInteger('global_accounts')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_accounts_deleted')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_brands')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_brands_deleted')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_transactions')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_challenges')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_prize_based_challenges')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_free_based_challenges')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_participants')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_winners')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_videos')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_images')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_traffic')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_banners')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_banner_clicks')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_downloads')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_leads')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_comments')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_video_shares')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_video_social_media_shares')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_profile_connections')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_404_errors')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_age_13_to_18')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_age_19_to_24')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_age_25_to_30')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_age_31_to_36')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_age_37_to_42')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_age_43_to_48')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_age_49_to_54')->unsigned()->nullable()->default('0');
            $table->bigInteger('global_age_55_plus')->unsigned()->nullable()->default('0');
	        $table->decimal('global_revenue', 19, 2)->nullable()->default('00.00');
	        $table->decimal('global_cost', 19, 2)->nullable()->default('00.00');
	        $table->decimal('global_net_profit', 19, 2)->nullable()->default('00.00');
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
        Schema::dropIfExists('admin_global_data');
    }
}
