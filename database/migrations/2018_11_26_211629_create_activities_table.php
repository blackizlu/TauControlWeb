<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();   //cliente para la actividad necesario
            $table->integer('user_id')->unsigned();     //responsable
            $table->integer('contact_id')->unsigned();
            $table->integer('project_id')->unsigned()->nullable();  //No necesariamente tiene que haber proyecto para la actividad
            $table->date('deadline');       //fecha para realizar y completar la actividad
            $table->time('time');           //hora de la actividad
            $table->enum('activity',['cita','envio_correo','instalacion_obra','llamada', 'visita_obra']);
            $table->boolean('completed');   //Boolean completado si o no
            $table->string('comments')->nullable();     //comentarios de la actividad
            $table->foreign('client_id')->references('id')->on('clients');      //conecta tabla foranea
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('contact_id')->references('id')->on('contacts');
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
        Schema::dropIfExists('activities');
    }
}
