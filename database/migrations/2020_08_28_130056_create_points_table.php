<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {

          $table->uuid('id')->primary();

          $table->morphs('pointable');

          $table->integer('purchase_count')->default(0);
          $table->integer('total_point')->default(0);
          $table->integer('used_point')->default(0);
          $table->float('amount')->default(0.0);
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
        Schema::dropIfExists('points');
    }
}
