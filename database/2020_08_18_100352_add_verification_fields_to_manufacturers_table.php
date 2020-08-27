<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVerificationFieldsToManufacturersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manufacturers', function (Blueprint $table) {
            $table->string('registration_document')->nullable('');
            $table->string('registration_id')->nullable('');
            $table->string('proof_of_address')->nullable('');
            $table->string('valid_id')->nullable('');
            $table->longText('narration')->nullable('');
            $table->boolean('account_verified')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manufacturers', function (Blueprint $table) {
            $table->dropColumn('registration_document');
            $table->dropColumn('registration_id');
            $table->dropColumn('proof_of_address');
            $table->dropColumn('validid_id');
            $table->dropColumn('narration');
        });
    }
    
}
