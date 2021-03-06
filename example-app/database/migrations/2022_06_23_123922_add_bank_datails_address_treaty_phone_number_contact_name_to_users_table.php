<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('bank_details')->nullable();
            $table->string('address')->nullable();
            $table->integer('treaty')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('contact_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('bank_details');
            $table->dropColumn('address');
            $table->dropColumn('treaty');
            $table->dropColumn('phone_number');
            $table->dropColumn('contact_name');
        });
    }
};
