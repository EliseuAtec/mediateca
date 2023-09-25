@extends('templates.main')

@section('title','Criar Obra')

@section('content')
    Criar Obra - content
    <form method="POST" action="#">

        {{-- Campos a preencher pelo utilizador--}}
        <div class="row border rounded p-3">
            <div class="row m-3">

                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tipo</div>
                        </div>

                        {{--Escolher tipo--}}
                        <select class="form-control" id="tipo" >
                            <option value="1">Livro</option>
                            <option value="2">DVD</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Nome</div>
                        </div>
                        <input type="text" class="form-control" id="nome" placeholder="Nome da Obra">
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
                               value="0">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Preço</div>
                        </div>
                        <input type="number" class="form-control" id="exemplares" min="0" step=".01"
                               value="00.00">
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
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row m-3">

                {{--Especifico de Livro--}}
                    <div class="livro form-group col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ISBN</div>
                            </div>
                            <input type="text" class="form-control" id="isbn" placeholder="">
                        </div>
                    </div>

                    <div class="livro row m-3">
                        <div class="form-group col-md-12">
                            <label for="descricao">Descrição</label>
                            <textarea rows="6" class="form-control" id="descr">0</textarea>
                        </div>
                    </div>

                    {{--Especifico de DVD--}}

                    <div class="dvd form-group col-md-3" style="display: none">
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

    <script type="text/javascript">
        $("#tipo").on("change",function (){
           if (this.value === '1'){
               $('.livro').show();
               $('.dvd').hide();
           } else{
               $('.livro').hide();
               $('.dvd').show();
           }
        });
    </script>

@endsection
