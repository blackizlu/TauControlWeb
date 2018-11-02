<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SaveProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('client_id')->unsigned();
                $table->integer('project_id')->unsigned();
                $table->string('category');
                $table->string('subcategory');
                $table->string('quantity');
                $table->string('unity');
                $table->string('description');
                $table->string('brand');
                $table->string('model');
                $table->string('unit_price');
                $table->string('unit_total');
                $table->string('sub_total');
                $table->string('tax');
                $table->string('total');
                $table->string('notes');



                $table->timestamps();
                $table->foreign('client_id')->references('id')->on('clients');
                $table->foreign('project_id')->references('id')->on('projects');


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
