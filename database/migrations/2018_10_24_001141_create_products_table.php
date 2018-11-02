<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->string('quantity');
            $table->string('unity');
            $table->string('description');
            $table->string('brand');
            $table->string('model');
            $table->string('unit_price');
            $table->string('sub_total');
            $table->timestamps();
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
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
