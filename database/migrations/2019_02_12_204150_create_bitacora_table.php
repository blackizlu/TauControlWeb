<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('client_id')->unsigned()->nullable();
            $table->integer('contact_id')->unsigned()->nullable();
            $table->integer('project_id')->unsigned()->nullable();
            $table->integer('invoice_id')->unsigned()->nullable();
            $table->integer('activity_id')->unsigned()->nullable();
            $table->enum('type', ['create', 'update', 'remove']);
            $table->string('modulo');
            $table->string('message');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('invoice_id')->references('id')->on('cotizacion');
            $table->foreign('activity_id')->references('id')->on('activities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacora');
    }
}
