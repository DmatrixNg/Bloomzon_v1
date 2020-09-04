<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToSiteConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_configs', function (Blueprint $table) {
            $table->longText('about')->nullable();
            $table->longText('services')->nullable();
            $table->longText('investor_relations')->nullable();
            $table->longText('career')->nullable();
            $table->longText('advertise_your_products')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_configs', function (Blueprint $table) {
            $table->dropColumn('about');
            $table->dropColumn('services');
            $table->dropColumn('investor_relations');
            $table->dropColumn('career');
            $table->dropColumn('advertise_your_products');
        });
    }
}
