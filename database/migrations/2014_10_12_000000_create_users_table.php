<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->number('cpf')->unique();
            $table->string('logradouro');
            $table->number('cep');
            $table->string('estado');
            $table->string('pais');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('senha');
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign()->references()->on()->onDelete('');

            // 1 venda tem um relatório um relatório tem várias vendas;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
