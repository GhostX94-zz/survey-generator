@include('helper.header_')


<!-- Content Wrapper START -->
<div class="main-content">
   <div class="container-fluid">
     <div class="page-hea der">
<h2 class="header-title">Ver Encuestas</h2>
<div class="header-sub-title">
<nav class="breadcrumb breadcrumb-dash">
</nav>
 </div>
 </div>
 <div class="card">
<div class="card-header border bottom">
 <h4 class="card-title"></h4>

<div class="card-body">
<div class="row">
 <div class="col-sm-12" id="main">
    @foreach($encuestas as $encuesta)
    
    {!!Form::open(['route'=>'setEncuesta.store','method'=>'POST','class'=>'"m-t-15'])!!}
    <input type="submit"  value="{{$encuesta->titulo}}" class="bt btn btn-danger" id="titulo" name="titulo" />
    @endforeach
    <div class="form-check">
    <input type="radio" class="form-radio-input" id="hombre" name="genero" value="{{$genero[0]}}">
    <label class="form-check-label" for="exampleCheck1">{{$genero[0]}}</label>
  </div>
  <div class="form-check">
    <input type="radio" class="form-radio-input" id="mujer" name="genero" value="{{$genero[1]}}">
    <label class="form-check-label" for="exampleCheck1">{{$genero[1]}}</label>
  </div>
  {!!Form::close()!!}
  </div>
    </div>
     </div>
       </div>
        </div>
   </div>
   @include('helper.footer')
   <script>
   $(document).ready(function () {
    $("input").prop('disabled', true);
    $("#mujer").prop('disabled', false);
    $("#hombre").prop('disabled', false);
    alert("Debe de seleccionar una opción para continuar!!!");
   });
      $("input").click(function(e){
      var idClicked = e.target.id;
      if(idClicked == "mujer" || idClicked == "hombre"){
        $("input").prop('disabled', false);
      }
    });
   </script>