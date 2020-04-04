<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('produto_id');
            $table->date('data_venda');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('cliente_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('products')->onDelete('cascade');
            // $table->foreign()->references()->on()->onDelete('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
