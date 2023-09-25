@extends('templates.main')

@section('title','Mostrar Obra: '.$obra->id)

@section('content')
    <div class="row">
        <div class="col-12 p-3">
            <div class="card obra">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 text-center">
                            <img src="{{asset('images/no-image.png')}}" class="img-fluid rounded" alt="xxxxx"/>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <h3 class="fw-bold fs-3">{{$obra->nome}}</h3>
                            <dl class="row">
                                <dt class="col-sm-2 fw-normal">Adicionado a:</dt>
                                <dd class="col-sm-4 fw-normal text-muted">{{$obra->created_at}}</dd>
                                <dt class="col-sm-2 fw-normal">Atualizada a:</dt>
                                <dd class="col-sm-4 fw-normal text-muted">{{$obra->updated_at}}</dd>
                            </dl>
                            <hr/>
                            <dl class="row">
                                <dt class="col-sm-3">Tipo:</dt>
                                @if($obra instanceof Livro)
                                <dd class="col-sm-9"> <i class="fa-solid fa-book fa-lg"></i> Livro </dd>
                                @else
                                    <dd class="col-sm-9"> <i class="fa-solid fa-compact-disc"></i> DVD </dd>
                                @endif
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Preço:</dt>
                                <dd class="col-sm-9">{{$obra->preco}} €</dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Nº Exemplares:</dt>
                                <dd class="col-sm-9">{{$obra->exemplares}}</dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Disponível:</dt>
                                <dd class="col-sm-9"><span class="badge @if($obra->disponivel) bg-success @else bg-danger @endif">
                                        @if($obra->disponivel) Sim @else Não @endif
                                    </span></dd>
                            </dl>
                            @if($obra instanceof Livro)
                                <dl class="row">
                                    <dt class="col-sm-3">ISBN:</dt>
                                    <dd class="col-sm-9">{{$obra->isbn}}</dd>
                                </dl>
                                @isset($obra->descr)
                                    <dl class="row">
                                        <dt class="col-sm-3">Descrição:</dt>
                                        <dd class="col-sm-9 fw-light">{{$obra->descr}}</dd>
                                    </dl>
                                @endisset
                            @else
                            <dl class="row">
                                <dt class="col-sm-3">Duração:</dt>
                                <dd class="col-sm-9">{{$obra->duracao}} Minutos</dd>
                            </dl>
                            @endif

                            <div class="col-12 text-center">
                                <div class="col-12" style="display: flex; justify-content: center;">
                                    <a href="{{route('obras.edit',$obra->id)}}" class="btn btn-success"><i class="fas fa-edit">Editar</i></a>
                                    <form class="form-custom"  method="POST" action="{{route('obras.delete',['id'=>$obra->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Apagar</button>
                                    </form>

                                </div>
                                <a href="{{route('obras.index')}}" class="btn btn-secondary float-md-end float-lg-end"><i class="fa-solid fa-table-list"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
