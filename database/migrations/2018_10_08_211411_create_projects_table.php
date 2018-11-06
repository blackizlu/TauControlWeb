<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('projects', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('client_id')->unsigned();
                $table->integer('price_id')->unsigned();
                $table->string('project_name');
                $table->enum('phase', ['Cotizado','Ganado','Lead','Negociacion','Pricing','Rechazado']);
                $table->dateTime('estimated_date');
                $table->timestamps();
                $table->foreign('client_id')->references('id')->on('client');
/*                $table->foreign('price_id')->references('id')->on('prices');*/

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
        Schema::dropIfExists('projects');
    }
}