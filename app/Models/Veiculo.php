<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    // Especifica o nome da tabela se for diferente
    protected $table = 'veiculos'; 

    // Se houver campos que não devem ser preenchidos em massa, defina-os aqui
    protected $fillable = [
        'mr', 'kmat', 'kmfiltro', 'kmoleo', 'cartao', 'cartao_manutencao',
        'revitalizacao', 'data_revitalizacao', 'placa', 'tipo', 'update_at', 'km_troca_pmeus'
    ];
}
