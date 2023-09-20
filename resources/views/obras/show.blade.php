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
                            <h3 class="fw-bold fs-3">Nome da Obra</h3>
                            <dl class="row">
                                <dt class="col-sm-2 fw-normal">Adicionado a:</dt>
                                <dd class="col-sm-4 fw-normal text-muted">-------</dd>
                                <dt class="col-sm-2 fw-normal">Atualizada a:</dt>
                                <dd class="col-sm-4 fw-normal text-muted">-------</dd>
                            </dl>
                            <hr/>
                            <dl class="row">
                                <dt class="col-sm-3">Tipo:</dt>

                                <dd class="col-sm-9"> <i class="fa-solid fa-book fa-lg"></i> Livro/DVD </dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Preço:</dt>
                                <dd class="col-sm-9">xxxx €</dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Nº Exemplares:</dt>
                                <dd class="col-sm-9">xxxxx</dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Disponível:</dt>
                                <dd class="col-sm-9"><span class="badge bg-success">Sim/Não</span></dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">ISBN:</dt>
                                <dd class="col-sm-9">xxxxx</dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Descrição:</dt>
                                <dd class="col-sm-9 fw-light">xxxxx</dd>
                            </dl>

                            <dl class="row">
                                <dt class="col-sm-3">Duração:</dt>
                                <dd class="col-sm-9">xxxx minutos</dd>
                            </dl>

                            <div class="col-12 text-center">
                                <a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Inserir Obra</a>
                                <a href="#" class="btn btn-success"><i class="fa-solid fa-edit"></i> Editar</a>
                                <form class="form-custom"  method="POST" action="#">
                                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Apagar</button>
                                </form>
                                <a href="#" class="btn btn-secondary float-md-end float-lg-end"><i class="fa-solid fa-table-list"></i> Lista Obras </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
