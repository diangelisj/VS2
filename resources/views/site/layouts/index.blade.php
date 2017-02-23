@include('site.layouts.partials.nav')




<div class="jumbotron">
  <div class="container">
  <h1></h1>
  <p></p>
  </div>
</div>



<!-- Call to Action Section -->

        <div class="container">

     <div class="well">
            <div class="row">
                    <div class="col-md-8">
                                        <p>@yield('pequena-descricao')</p>
                    </div>
                    <div class="col-md-12">
                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Mensagem do Instrutor</button>
                      <button type="button" class="btn  btn-success btn-lg"  onclick="window.location.href='{{route('cadastros.create')}}'" >Particiar do Evento</button>


                    </div>
              </div>

    </div>


        </div>



<!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Mensagem do Instutor</h4>
       </div>
       <div class="modal-body">

           <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" width="640" height="480" src="https://www.youtube.com/embed/qOWcATcab7Q?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
       </div>
     </div>

   </div>
 </div>

<!-- Final Modal -->
                <!--END  Call to Action Section -->

<div class="container">
  <h1>@yield('nome-curso')</h1>
  <h4>@yield('publico-alvo')</h4>
  <div class="alert alert-info">

<p><strong>OBJETIVO:</strong> @yield('objetivo')</p>
    </div>

    <!-- Mais informações - recebendo elementos com o conteúdo-->
    <!-- More information - receive elements  UL LI  with content-->

      @yield('mais-informacoes')



    <div class="alert alert-warning">


      <strong>  CUSTO:</strong>
            @yield('custo')
    </div>

  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
  </div>

<br/>
  <div class="row">
 <div class="col-sm-4">


   <div class="list-group">
    <a href="#" class="list-group-item">First item</a>
    <a href="#" class="list-group-item">Second item</a>
    <a href="#" class="list-group-item">Third item</a>
  </div>


 </div>
 <div class="col-sm-8">Todos os dias quando acordo não tenho mais o tempo que passou, mas tenho muito tempo, tenho todo tempo do mundo.</div>
</div>


</div>

</body>
</html>
