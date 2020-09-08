<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {

            $table->id();

            $table->string('package')->nullable();

            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();

            $table->string('payment_method')->nullable();
            $table->string('payment_ref')->nullable();
            $table->float('amount')->nullable();

            $table->string('status')->default('approved');

            $table->integer('subscriptionable_id');
            $table->string('subscriptionable_type');

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
        Schema::dropIfExists('subscriptions');
    }
}
