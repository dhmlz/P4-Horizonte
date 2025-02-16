<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Execute a migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veiculos', function (Blueprint $table) {
            // Definindo as colunas conforme os nomes fornecidos
            $table->id(); // para o campo "id"
            $table->string('mr')->nullable(); // mr
            $table->integer('kmat')->nullable(); // kmat
            $table->integer('kmfiltro')->nullable(); // kmfiltro
            $table->integer('kmoleo')->nullable(); // kmoleo
            $table->string('cartao')->nullable(); // cartao
            $table->string('cartao_manutencao')->nullable(); // cartao_manutencao
            $table->string('revitalizacao')->nullable(); // revitalizacao
            $table->date('data_revitalizacao')->nullable(); // data_revitalizacao
            $table->string('placa')->nullable(); // placa
            $table->string('tipo')->nullable(); // tipo
            $table->timestamp('update_at')->nullable(); // update_at
            $table->timestamps(); // created_at, updated_at
            $table->integer('km_troca_pmeus')->nullable(); // km_troca_pmeus
        });
    }

    /**
     * Revert the migration.
     *
     * @return void
     */
    public function down()
    {
        // Caso precise desfazer a migration, você pode excluir as colunas
        Schema::table('veiculos', function (Blueprint $table) {
            $table->dropColumn([
                'mr', 'kmat', 'kmfiltro', 'kmoleo', 'cartao', 'cartao_manutencao',
                'revitalizacao', 'data_revitalizacao', 'placa', 'tipo', 'update_at', 'km_troca_pmeus'
            ]);
        });
    }
}