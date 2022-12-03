@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Tarefa</div>
                <div class="card-body">
                    <form method="POST" action="{{route('tarefa.store')}}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="mb-3">
                          <label for="tarefa" class="form-label">Tarefa</label>
                          <input type="text" class="form-control" name="tarefa">
                        </div>
                        <div class="mb-3">
                          <label for="data_tarefa_conclusao" class="form-label">Data da Conclusão</label>
                          <input type="datetime-local" class="form-control" name="data_tarefa_conclusao">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar Tarefa</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
