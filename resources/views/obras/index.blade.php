@extends('templates.main')

@section('title','Listar Obras')

@section('content')
<div class="row m-4">
    <div class="col-12 ">
        <a href="#" class="btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Inserir Obra</a>
    </div>
</div>
<div class="row m-4">
    <div class="col-12">

        {{--Se existirem Obras--}}
        @if(count($obras))
        <table class="table table-bordered table-striped">
            <thead>
            @foreach($obras as $obra)

                <tr>
                    <th scope="row">{{$obra->id}}</th>
                    <td>{{$obra->nome}}</td>
                    <td>
                        @if($obra instanceof Livro)
                            Livro
                        @else
                            DVD
                        @endif
                    </td>
                    <td>{{$obra->exemplares}}</td>
                    <td>{{$obra->preco}}</td>
                    <td>
                        <a href="{{route('obras.show',$obra->id)}}" class="btn btn-primary"><i class="far fa-eye">Ver</i></a>
                        <a href="{{route('obras.edit',$obra->id)}}" class="btn btn-success"><i class="fas fa-edit">Editar</i></a>
                        <form class="form-custom" style="display: inline" method="POST" action="{{route('obras.delete',$obra->id)}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt">Apagar</i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </thead>
            <tbody>

            </tbody>
        </table>

        {{--Não existem Obraas--}}
        @else
        <div class="alert alert-warning" role="alert">
            Não existem obras
        </div>
        @endif
    </div>
</div>
@endsection
