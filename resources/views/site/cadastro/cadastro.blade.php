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


  <h3>Preencho o Formulário Abaixo para participar do curso :</h3>
   <div>
     <form action="{{route('/cadastro.store')}}">
       <input type="text" id="fname" name="firstname" value="CURSO A" disabled="yes">
       <label for="fname">Nome:</label>
       <input type="text" id="fname" name="firstname">

       <label for="lname">Telefone:</label>
       <input type="text" id="lname" name="lastname">

       <label for="lname">Local de Trabalho:</label>
       <input type="text" id="lname" name="lastname">


       <input type="submit" value="Participar do Evento">
     </form>
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
