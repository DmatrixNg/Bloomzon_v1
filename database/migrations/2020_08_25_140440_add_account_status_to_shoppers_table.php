<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAccountStatusToShoppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shoppers', function (Blueprint $table) {
            $table->string('account_status')->default('active');
            $table->string('subscription_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shoppers', function (Blueprint $table) {
            $table->dropColumn('account_status');
            $table->dropColumn('subscription_date');
        });
    }
    
}
