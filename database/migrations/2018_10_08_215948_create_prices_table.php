<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('prices', function (Blueprint $table) {

                $table->integer('project_id');
                $table->dateTime('request_invoice');
                $table->dateTime('creation_invoice');
                $table->boolean('sold');
                $table->dateTime('sell_date');

/*                $table->foreign('project_id')->References('id')->On('projects');*/

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
