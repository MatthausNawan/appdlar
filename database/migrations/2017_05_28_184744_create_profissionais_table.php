<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome')->nullable();
            $table->string('apelido')->nullable();
            $table->enum('estado_civil',['cadasa','solteira','divorciada','viuva'])->nullable();
            $table->integer('idade')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('telefone_movel');
            $table->string('telefone_fixo')->nullable();
            $table->string('email')->nullable();
            $table->text('foto')->nullable();
            $table->longText('informacoes')->nullable();
            $table->enum('status',['disponivel','indisponivel'])->nullable();

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
        Schema::dropIfExists('profissionais');
    }
}
