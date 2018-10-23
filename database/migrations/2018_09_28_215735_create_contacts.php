<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->string('contact_name');
            $table->string('phone_number');
            $table->string('workstation')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients');

        });
    }


    /**
     * Reverse the migrations.
     *RELACION UNO A MUCHOS UN CONTACTO PERTENECE A UN SOLO CLIENTE PERO EL CLIENTE PUEDE TENER MUCHOS CONTACOS.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');

    }
}