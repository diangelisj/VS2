@include('site.layouts.partials.nav')

<div class="container">


  {!!Form::open([route('contact.store')])!!}

  <label for="lname">Nome:</label>
    <div class="form-group">
        {!!Form::text('nome',null,['class'=>'form-control'])!!}
    </div>

    <label for="lname">Assunto:</label>
    <div class="form-group">
        {!!Form::text('assunto',null,['placeholder'=>'Digite o assunto','class'=>'form-control'])!!}
    </div>

    <label for="lname">Sua mensagem:</label>
    <div class="form-group">
        {!!Form::textarea('mensagem',null,['placeholder'=>'Digite o assunto','class'=>'form-control'])!!}
    </div>



{!!Form::Submit('Enviar Mensagem',['class'=>  'but btn-success'])!!}


         {!!Form::close()!!}

</div>






</body>
</html>
