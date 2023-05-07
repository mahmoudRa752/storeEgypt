<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('brand')->nullable();
            $table->boolean('bestseller')->nullable();
            $table->boolean('bestrated')->nullable();
            $table->boolean('new');
            $table->boolean('sale')->default('0');
            $table->tinyInteger('rate')->nullable();
            $table->string('image');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
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
}
