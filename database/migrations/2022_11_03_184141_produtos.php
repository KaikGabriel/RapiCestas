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
        Schema::create('produtos', function (Blueprint $table) {

            $table->id();

            $table->string('nome');

            $table->string('valor')->nullable();

            $table->string('estado');

            $table->string('cidade');

            $table->string('categoria');

            $table->string('contato');

            $table->string('vendadoe');

            $table->string('apr');


            

        });

    }



    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::dropIfExists('produtos');

    }
};
