<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

abstract class Obra{
    public function __construct(
        public int    $id,
        public string $nome,
        public int    $exemplares,
        public float  $preco,
        public bool   $disponivel,//Disponível para requisição
        public string $created_at,
        public string $updated_at
    )
    {
    }


}

class Livro extends Obra{
    public function __construct(
        int $id,
        string $nome,
        int $exemplares,
        float $preco,
        bool $disponivel,
        string $created_at,
        string $updated_at,
        public string $isbn,
        public string $descr=''//Opcional
    )
    {
        parent::__construct($id, $nome, $exemplares, $preco, $disponivel, $created_at, $updated_at);
    }
}

class DVD extends Obra{
    public function __construct(int $id, string $nome, int $exemplares, float $preco, bool $disponivel, string $created_at, string $updated_at,
                                public int $duracao)
    {
        parent::__construct($id, $nome, $exemplares, $preco, $disponivel, $created_at, $updated_at);
    }

}

$obras = [
    new Livro(
        1,
        'A Criada',
        3,
        17.51,
        false,
        '2023-03-01 12:00:00',
        '2023-03-01 12:00:00',
        '9789895701124',
        'Descrição Livro 1'
    ),
    new Livro(
        2,
        'Flip thinking',
        3,
        17.51,
        true,
        '2023-03-12 12:00:00',
        '2023-04-12 12:00:00',
        '6689895701124',
    ),
    new DVD(
        3,
        'O Senhor dos Aneis',
        '5',
        22.10,
        true,
        '2023-06-01 12:00:00',
        '2023-06-01 12:00:00',
        233
    )
];

//$obras=[];


Route::get('/', function () {
    return redirect(route('obras.index'));
});

Route::get('/obras', function () use($obras) {
    return view('obras.index',['obras'=>$obras]);
})->name('obras.index');

Route::get('/obras/create', function () {
    return view('obras.create');
})->name('obras.create');

Route::post('/obras', function () {
    return 'Criar novo registo';
})->name('obras.store');

Route::get('/obras/{id}', function (string $id) use($obras) {
    $obra=collect($obras)->firstWhere('id',$id);
    return view('obras.show',['obra'=> $obra]);
})->name('obras.show');

Route::get('/obras/{id}/edit', function (string $id) use($obras) {
    $obra=collect($obras)->firstwhere('id',$id);
    return view('obras.edit',['obra'=> $obra]);
})->name('obras.edit');

Route::put('/obras/{id}', function (string $id) {
    return 'Update de um registo com id: '.$id;
})->name('obras.update');

Route::delete('/obras/{id}', function (string $id) {
    return 'Apagar o registo com id: '.$id;
})->name('obras.delete');





