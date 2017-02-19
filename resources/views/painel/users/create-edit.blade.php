@extends('painel.layouts.layout')

  @section('content')

    <div class="title-pg">
			<h1 class="title-pg">{{$title or 'Fomulário'}}</h1>
		</div>

		<div class="content-din">


        {!!Form::open(['url'=>'/painel/usuarios','class'=>'form form-search form-ds'])!!}
				<div class="form-group">
				          {!!Form::text('name',null,['placeholder'=>'Nome:','class'=>'form-control'])!!}
				</div>

        <div class="form-group">
				         {!!Form::email('email',null,['placeholder'=>'E-Mail:','class'=>'form-control'])!!}
				</div>

        <div class="form-group">
                 {!!Form::password('password',['placeholder'=>'Senha:','class'=>'form-control'])!!}
        </div>

        <div class="form-group">
				          {!!Form::text('escritorio',null,['placeholder'=>'Escritório:','class'=>'form-control'])!!}
				</div>

        <div class="form-group">
				          {!!Form::file('escritorio',['placeholder'=>'Escritório:','class'=>'form-control'])!!}
                    <br/>  <br/>
				</div>

        <div class="form-group">
                  {!!Form::text('escritorio',null,['placeholder'=>'Escritório:','class'=>'form-control'])!!}
        </div>

				<div class="form-group">
					<button class="btn btn-search">Enviar</button>
				</div>
			{!!Form::close()!!}

		</div>


  @endsection
