<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToSiteConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_configs', function (Blueprint $table) {
            $table->longText('retailpolicy')->nullable();
            $table->longText('accountpolicy')->nullable();
            $table->longText('cookies')->nullable();
            $table->longText('privacy')->nullable();
            $table->longText('refundpolicy')->nullable();
            $table->longText('datapolicy')->nullable();
            $table->longText('shippingreturns')->nullable();
            $table->longText('qualitycontrol')->nullable();
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
            $table->dropColumn('retailpolicy');
            $table->dropColumn('accountpolicy');
            $table->dropColumn('cookies');
            $table->dropColumn('privacy');
            $table->dropColumn('refundpolicy');
            $table->dropColumn('datapolicy');
            $table->dropColumn('shippingreturns');
            $table->dropColumn('qualitycontrol');
        });
    }
}
