<?php

// painel de controlle


Route::group(['prefix'=>'painel'],function(){



              Route::resource('/usuarios','Painel\UsersController');

              Route::get('/','Painel\PainelController@index');


              //posts
              Route::any('/posts/pesquisar','Painel\CategoryController@search')->name('categorias.search');
              Route::resource('/categorias','Painel\PostsController');


              //Painel categorias
              Route::resource('painel/categorias','Painel\CategoryController');

});

// contato
Route::resource('contact','ContactController');


Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', function () {
    return view('cursos.cursos');
});


Route::get('/noticias', function () {
    return view('site.noticias.noticias');
});

Route::get('/instrutores', function(){
  return view('site.instrutores.instrutores');
});
Route::get('/eventos',function(){
  return view('site.eventos.eventos');
});

Route::get('/oferecemos',function(){
  return view('site.oferecemos.oferecemos');
});

Route::get('/contato', function () {
    return view('site.contato.contato');
});



//Registros
Route::get('/cadastro', function(){
  return view('site.cadastro.cadastro');
});
Route::post('/cadastro', function(){
  return view('site.cadastro.cadastro');
});








//Acesso de alunos



Route::group(['prefix' => 'aulas','middleware' => 'auth'], function () {
    Route::get('aluno/conteudo', function ()    {
        return view('aluno.conteudo.index');
    });
});



Route::get('/aluno', function(){
  return view('site.aluno.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
