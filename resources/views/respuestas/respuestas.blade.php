@include('respuestas.header')
@include('respuestas.sidebar')


<!-- Content Wrapper START -->
<div class="main-content">
   <div class="container-fluid">
     <div class="page-header">
     <h2 class="header-title">{{$titulo}}</h2>
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

{!!Form::open(['route'=>'respuesta.store','method'=>'POST','class'=>'"m-t-15'])!!}
     <input type="hidden"  class="form-control" id="tipoEncuesta" name="tipoEncuesta" value="{{$tipoEncuesta}}">
     <input type="hidden"  class="form-control" id="titulo" name="titulo" value="{{$titulo}}">
     <input type="hidden"  class="form-control" id="genero" name="genero" value="{{$genero}}">

                 @foreach($preguntas as $indice => $pregunta)

                 @if($pregunta->tipoPregunta == "Abiertas")
             <div class="form-row">
                 <div class="col-md-12">
                     <div class="form-group">
                         <label class="control-label">{{$indice}} {{$pregunta->nombre}}</label>
                         <input type="text" class="form-control" id="{{$pregunta->idPregunta}}" name="abierta[]">
                <input type="hidden"  class="form-control" id="{{$pregunta->idPregunta}}" name="idPregunta[]" value="{{$pregunta->idPregunta}}">
                     </div>
                 </div>
                 @endif

                 @if($pregunta->tipoPregunta == "Cerradas")
                 <div class="form-row">
                 <div class="col-md-12">
                     <div class="form-group">
                         <label class="control-label">{{$indice}} {{$pregunta->nombre}}</label>
                         <br/>
                         <label class="control-label">Si</label>
                         <input id="{{$pregunta->idPregunta}}" name="cerrada[]" type="checkbox" value="Si">
                         <br/>
                         <label class="control-label">No</label>
                         <input id="{{$pregunta->idPregunta}}" name="cerrada[]" type="checkbox" value="No">
                         <input type="hidden"  class="form-control" id="{{$pregunta->idPregunta}}" name="idPregunta[]" value="{{$pregunta->idPregunta}}">
                     </div>
                 </div>
                 </div>
                 @endif

                 @if($pregunta->tipoPregunta == "Mixtas")
                  @if($indice <= 7 )
                 <div class="form-row">
                 <div class="col-md-12">
                 <div class="form-group">
                         <label class="control-label">{{$indice}} {{$pregunta->nombre}}</label>
                         <br/>
                         <label class="control-label">Si</label>
                         <input id="{{$pregunta->idPregunta}}" name="mixta[]" type="checkbox" value="Si">
                         <br/>
                         <label class="control-label">No</label>
                         <input id="{{$pregunta->idPregunta}}" name="mixta[]" type="checkbox" value="No">
                         
                     </div>
                 </div>
                 </div>
                  @else
                <div class="form-row">
                 <div class="col-md-12">
                     <div class="form-group">
                         <label class="control-label">{{$indice}} {{$pregunta->nombre}}</label>
                         <input type="text" class="form-control" id="{{$pregunta->idPregunta}}" name="mixta[]">
                     </div>
                 </div>
                  @endif    
                  <input type="hidden"  class="form-control" id="{{$pregunta->idPregunta}}" name="idPregunta[]" value="{{$pregunta->idPregunta}}">
                 @endif

             @endforeach
             <input type="submit" id="enviar" value="Enviar" onclick="" class="bt btn btn-success" />
             {!!Form::close()!!}
  </div>
    </div>
     </div>
     
       </div>
        </div>
   </div>


@include('respuestas.footer')
   