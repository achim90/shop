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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('price_in');
            $table->integer('percent');

            $table->string('unit');
            $table->integer('amount');

            $table->unsignedBigInteger('category_id');
            $table->index('category_id', 'post_category_idx');
            $table
                ->foreign('category_id', 'post)category_fk')
                ->on('categories')
                ->references('id')
                ->onDelete('cascade');

            $table->unsignedBigInteger('brand_id');

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
        Schema::dropIfExists('products');
    }
};
