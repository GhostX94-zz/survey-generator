<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="js/servicios.js"></script>



<!-- Content Wrapper START -->
<div class="main-content">
   <div class="container-fluid">
     <div class="page-header">
<h2 class="header-title">Encuesta</h2>
<div class="header-sub-title">
<nav class="breadcrumb breadcrumb-dash">
<a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Inicio</a>
<span class="breadcrumb-item active">Crear Encuesta</span>
</nav>
 </div>
 </div>
 <div class="card">
<div class="card-header border bottom">
 <h4 class="card-title">Crear encuesta</h4>
</br>
  <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label"><b>Titulo</b></label>
                         <input type="text" id="titulo" class="form-control">
                     </div>
                 </div>
    <div class="dropdown col-md-6">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Seleccionar...
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        @foreach($tipoEncuestas as $encuesta)
        <li><a href="#" id="{{$encuesta->nombre}}" >{{$encuesta->nombre}}</a></li>
        <li role="separator" class="divider"></li>
        @endforeach
    </ul>
    </div>
 </div>
<div class="card-body">
<div class="row">
 <div class="col-sm-12" id="main">
     @include('encuesta.abiertas')


  </div>
    </div>
     </div>
       </div>
        </div>
   </div>
                <!-- Content Wrapper END -->
