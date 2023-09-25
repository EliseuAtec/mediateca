@extends('templates.main')

@section('title','Editar Obra: '.$obra->id)

@section('content')
    <form method="POST" action="#">

        {{-- Campos a preencher pelo utilizador--}}
        <div class="row border rounded p-3">
            <div class="row m-3">
                <div class="form-group col-md-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ID</div>
                        </div>
                        <input type="text" class="form-control" id="id" placeholder="{{$obra->id}}" disabled>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tipo</div>
                        </div>
                        <input type="text" class="form-control" id="tipo"
                               placeholder="@if($obra instanceof Livro) Livro @elseif($obra instanceof DVD) DVD @endif"
                               disabled>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Nome</div>
                        </div>
                        <input type="text" class="form-control" id="nome" placeholder="{{$obra->nome}}">
                    </div>
                </div>

            </div>

            <div class="row m-3">
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Exemplares</div>
                        </div>
                        <input type="number" class="form-control" id="exemplares" min="0" step="1"
                               value="{{$obra->exemplares}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Preço</div>
                        </div>
                        <input type="number" class="form-control" id="exemplares" min="0" step=".01"
                               value="{{$obra->preco}}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">€</div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Disponível</div>
                        </div>
                        <select class="form-control" id="disponivel">
                            @if($obra->disponivel)
                                <option>Sim</option>
                                <option>Não</option>
                            @else
                                <option>Não</option>
                                <option>Sim</option>
                            @endif

                        </select>
                    </div>
                </div>
            </div>
            <div class="row m-3">

                {{--Especifico de Livro--}}
                @if($obra instanceof Livro)
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ISBN</div>
                        </div>
                        <input type="text" class="form-control" id="isbn" placeholder="">
                    </div>
                </div>

                <div class="row m-3">
                    <div class="form-group col-md-12">
                        <label for="descricao">Descrição</label>
                        <textarea rows="6" class="form-control" id="descricao">{{$obra->descr}}</textarea>
                    </div>
                </div>

                {{--Especifico de DVD--}}
                @else
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Duração</div>
                        </div>
                        <input type="number" min="0" step="1" class="form-control" id="duracao"
                               value="0">
                        <div class="input-group-prepend">
                            <div class="input-group-text">minutos</div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            {{-- Botões de controlo--}}
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Atualizar</button>
                    <a href="{{route('obras.index')}}" class="btn btn-warning"><i class="fa-solid fa-ban"></i> Cancelar</a>
                </div>
            </div>

        </div>

    </form>


@endsection
