<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->integer('total_amount')->nullable();
        $table->string('order_reference')->nullable();
        $table->string('billing_address')->nullable();
        $table->integer('delivery_agent_id')->nullable();
        $table->string('payment_method')->nullable();
        $table->integer('payment_status')->default(0);
        $table->longText('order_notes')->nullable();
        $table->integer('delivery_fee')->nullable();
        $table->integer('accumulated_points')->default(0);
        $table->string('status')->default('new')->nullable();
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
        //
    }
}
