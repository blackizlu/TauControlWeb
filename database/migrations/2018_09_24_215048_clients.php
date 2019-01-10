<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clients extends Migration /* Crea clientes :)*/
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->boolean('is_business');
            $table->string('office_number')->nullable();
            $table->string('client_name');
/*            $table->enum('type', ['Arquitecto','Constructora','Desarrolladora','Cliente_Final','Gerencia_obra']);*/
            $table->string('web_page')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');

    }
}
