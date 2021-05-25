<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('categoria', ['Comida', 'Bebida']);
            $table->string('nombre', 200);
            $table->decimal('precio', 10,2);
            $table->decimal('compra', 10,2);
            $table->integer('stock');
            $table->string('fotografia')->nullable();

            //clave foranea
         /**    $table->unsignedBigInteger('distribuidor_id');
           *$table->foreign('distribuidor_id')
            *        ->references('id')->on('distribuidor')
            *       ->onDelete('cascade');
            */        


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
