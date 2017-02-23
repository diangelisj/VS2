@include('site.layouts.partials.nav')

<div class="container">


  {!!Form::open(route('/contact.store'))!!}


    <div class="form-group">
        {!!Form::text('nome',null,['placeholder'=>'Type your name','class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!!Form::text('assunto',null,['placeholder'=>'Digite o assunto','class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!!Form::textarea('mensagem',null,['placeholder'=>'Digite o assunto','class'=>'form-control'])!!}
    </div>


    <div class="form-group">
    {!!Form::Submit('Enviar Mensagem',['class'=>  'but btn-success'])!!}
    </div>

  {!!Form::close()!!}

</div>






</body>
</html>
