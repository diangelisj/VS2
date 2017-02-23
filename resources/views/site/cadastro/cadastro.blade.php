@include('site.layouts.partials.nav')

<div class="jumbotron">
  <div class="container">
  <h1></h1>
  <p></p>
  </div>
</div>



<!-- Call to Action Section -->

        <div class="container">
        </div>





</div>

<!-- Final Modal -->
                <!--END  Call to Action Section -->

<div class="container">

  <div class="row">
 <div class="col-sm-8">


  <h3>Preencha o Formulário Abaixo para participar do curso :</h3>
   <div>
      {!!Form::open(['url'=>'/cadastros/'])!!}

       <input type="text" id="curso" name="curso" value="CURSO A" >




       {!!Form::label('Nome:')!!}
       {!!Form::text('nome',null,['class'=>'form-control'])!!}


       {!!Form::label('Telefone:')!!}
       {!!Form::text('telefone',null,['class'=>'form-control'])!!}


       {!!Form::label('Local de Trabalho')!!}
       {!!Form::text('local',null,['class'=>'form-control'])!!}


    {!!Form::submit('Participar do Envento')!!}

     {!!Form::close()!!}
   </div>


  </div>
 <div class="col-sm-4">
      <div>
          <h3>Detalhes</h3>
          <ul>
            <li>Você deverá levar 5K de alimento não perecível ao local do evento.</li>
            <li>Após a conclusão do curso. Todos os participantes vão ter acesso ao painel do aluno.</li>
            <li>Será disponibilizado material de apoio online.</li>
          </ul>
<button type="button"  class="btn btn-primary">Primary</button>

      </div>

 </div>

</div>



</div>

</body>
</html>
