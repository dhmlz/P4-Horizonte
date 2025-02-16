@extends('layouts.app')

@section('content')
<style>
    table {
        table-layout: fixed; /* Força o uso de largura fixa para as colunas */
        width: 100%; /* Garante que a tabela ocupe 100% da largura */
    }
    th, td {
        overflow: hidden; /* Evita o crescimento das células além do esperado */
    }
</style>

    <h1>CARROS</h1>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-semibold mb-4">Lista de Carros</h1>

        @if($carros->isEmpty())
            <p class="text-center text-gray-700">Nenhuma carro cadastrado.</p>
        @else
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
    <table id="minhaTabela" class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-100 border-b">
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">MR</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Kmat</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Km Oleo</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Km Filtro</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Manutenção</th>
                <th class="py-3 px-4 text-center text-sm font-medium text-gray-700 ">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carros as $carro)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $carro->mr }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $carro->kmat }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $carro->kmoleo }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $carro->kmfiltro }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $carro->manutencao ? 'Sim' : 'Não' }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700"> 
                        <a href="#" class="btn btn-info btn-circle" title="Informações sobre a MR">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="#" class="btn btn-warning btn-circle" title="Edite informações sobre a MR">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle" title="Deletar MR do sistema">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script>
    $(document).ready(function() {
        $('#minhaTabela').DataTable({
            "responsive": true, // Habilita a tabela responsiva
            "order": [] // Inicializa sem ordenação padrão
        });
    });
</script>

        @endif
    </div>
@endsection
