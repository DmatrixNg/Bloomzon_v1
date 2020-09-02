<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueryRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('query_replies', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('query_id')->nullable();
            $table->foreign('query_id')->references('id')->on('queries')->onDelete('cascade');

            $table->longText('message');
            $table->string('replyer'); //takes sub_admin or supper_admin
            
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('query_replies');
    }
}
