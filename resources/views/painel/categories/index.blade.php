@extends('painel.layouts.layout')


      @section('content')
        <div class="title-pg">
          <h1 class="title-pg">Listagem dos Itens</h1>
        </div>

        <div class="content-din bg-white">


<!-- formulário de pesquisa -->
          <div class="form-search">

              {!!Form::open(['url'=>'/painel/usuarios/pesquisar','class'=>'form form-inline'])!!}
              {!!Form::text('nome',null,['class'=>'form-control','placeholder'=>'Digite o nome'])!!}
              {!!Form::email('email',null,[ 'class'=>'form-control','placeholder'=>'Email'])!!}
              {!!Form::submit('Pesquisar',['class'=>'btn btn-success'])!!}
              {!!Form::close()!!}
          </div>

          <div class="class-btn-insert">
            <a href="{{route('usuarios.create')}}" class="btn-insert">
              <span class="glyphicon glyphicon-plus"></span>
              Cadastrar
            </a>
          </div>

          <table class="table table-striped">
            <tr>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Last</th>
              <th width="150">Ações</th>
            </tr>

            @forelse ($usuarios as $u)


              <tr>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->escritorio}}</td>
                <td>
                  <a href="" class="edit">Edit</a>
                  <a href="" class="delete">Delete</a>
                </td>
              </tr>
            @empty
              <p>Nenhum cadastro localizado</p>
            @endforelse
          </table>

          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>

        </div><!--Content Dinâmico-->
      @endsection
