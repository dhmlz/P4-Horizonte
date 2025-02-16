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


<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-3xl font-semibold">MOTOCICLETAS</h1>
    <!-- Botão "ADICIONAR NOVA MOTOCICLETA" que abre o modal -->
    <button type="button" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#addMotoModal">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">ADICIONAR MOTOCICLETAS</span>
    </button>
</div>


    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-semibold mb-4">Lista de Motos</h1>

        @if($motos->isEmpty())
            <p class="text-center text-gray-700">Nenhuma moto cadastrada.</p>
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
            @foreach ($motos as $moto)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $moto->mr }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $moto->kmat }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $moto->kmoleo }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $moto->kmfiltro }}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{ $moto->manutencao ? 'Sim' : 'Não' }}</td>
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

    <!-- Modal para Adicionar Nova Moto -->
<div class="modal fade" id="addMotoModal" tabindex="-1" aria-labelledby="addMotoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addMotoModalLabel">Adicionar Nova Motocicleta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="mr" class="form-label">MR</label>
                <input type="text" class="form-control" id="mr" name="mr" required>
            </div>
            <div class="mb-3">
                <label for="kmat" class="form-label">Kmat</label>
                <input type="text" class="form-control" id="kmat" name="kmat" required>
            </div>
            <div class="mb-3">
                <label for="kmoleo" class="form-label">Km Oleo</label>
                <input type="text" class="form-control" id="kmoleo" name="kmoleo" required>
            </div>
            <div class="mb-3">
                <label for="kmfiltro" class="form-label">Km Filtro</label>
                <input type="text" class="form-control" id="kmfiltro" name="kmfiltro" required>
            </div>
            <div class="mb-3">
                <label for="manutencao" class="form-label">Necessita Manutenção?</label>
                <select class="form-control" id="manutencao" name="manutencao" required>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
