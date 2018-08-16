@include('respuestas.header')

<style>
body{
    color: black;
}

</style>

<!-- Content Wrapper START -->
<div class="container">
   <div class="container-fluid">
     <div class="page-header">
     <h2 class="header-title">{{$titulo}}</h2>
<div class="header-sub-title">
<nav class="breadcrumb breadcrumb-dash">
</nav>
 </div>
 </div>
 <div class="card" style="background-color:darkseagreen; border-radius: 73px;">
<div class="card-header border bottom" style="">
 <h4 class="card-title"></h4>

<div class="card-body">
<div class="row">
 <div class="col-sm-12" id="main">
 <h2 class="header-title"><b>{{$titulo}}</b></h2>
{!!Form::open(['route'=>'respuesta.store','method'=>'POST','class'=>'"m-t-15'])!!}
     <input type="hidden"  class="form-control" id="tipoEncuesta" name="tipoEncuesta" value="{{$tipoEncuesta}}">
     <input type="hidden"  class="form-control" id="titulo" name="titulo" value="{{$titulo}}">
     <input type="hidden"  class="form-control" id="genero" name="genero" value="{{$genero}}">

                 @foreach($preguntas as $indice => $pregunta)

                 @if($pregunta->tipoPregunta == "Abiertas")
             <div class="form-row">
                 <div class="col-md-12">
                     <div class="form-group">
                     <label class="control-label" style="border-radius: 15px 50px;background: #ffff;padding: 20px;width: 250px; height: 15px; ">{{$indice+1}}.- {{$pregunta->nombre}}</label>
                         <input type="text" class="form-control" id="{{$pregunta->idPregunta}}" name="abierta[]">
                <input type="hidden"  class="form-control" id="{{$pregunta->idPregunta}}" name="idPregunta[]" value="{{$pregunta->idPregunta}}">
                     </div>
                 </div>
                 @endif

                 @if($pregunta->tipoPregunta == "Cerradas")
                 <div class="form-row">
                 <div class="col-md-12">
                     <div class="form-group">
                     <label class="control-label" style="border-radius: 15px 50px;background: #ffff;padding: 20px;width: 250px; height: 15px; ">{{$indice+1}}.- {{$pregunta->nombre}}</label>
                         <br/>
                         @if($pregunta->idPregunta == $pregunta->preguntaID)
                         <div class="col-md-12">
                         <fieldset id="cerrada-{{$pregunta->idPregunta}}">
                         <label class="control-label" >{{$pregunta->opcion}}</label>
                         <input  name="cerrada[]-{{$pregunta->idPregunta}}" type="radio" value="{{$pregunta->opcion}}">
                         </fieldset>
                         </div>
                         @endif
                         <br/>
                         <div class="col-md-12">
                         </div>
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
                 <label class="control-label" style="border-radius: 15px 50px;background: #ffff;padding: 20px;width: 250px; height: 15px; ">{{$indice+1}}.- {{$pregunta->nombre}}</label>
                         <br/>
                         <div class="col-md-12">
                         <fieldset id="mixta-{{$pregunta->idPregunta}}">
                         <label class="control-label" >Si</label>
                         <input  name="mixta[]-{{$pregunta->idPregunta}}" type="radio" value="Si">
                         <label class="control-label" >No</label>
                         <input  name="mixta[]-{{$pregunta->idPregunta}}" type="radio" value="No">
                         </fieldset>
                         </div>
                         <br/>
                         <div class="col-md-12">
                         </div>
                     </div>
                 </div>
                 </div>
                  @else
                <div class="form-row">
                 <div class="col-md-12">
                     <div class="form-group">
                     {{$indice+1}}.-<label class="control-label" style="border-radius: 15px 50px;background: #ffff;padding: 20px;width: 250px; height: 15px; ">{{$pregunta->nombre}}</label>
                         <input type="text" class="form-control" id="{{$pregunta->idPregunta}}" name="mixta[]">
                     </div>
                 </div>
                  @endif    
                  <input type="hidden"  class="form-control" id="{{$pregunta->idPregunta}}" name="idPregunta[]" value="{{$pregunta->idPregunta}}">
                 @endif

             @endforeach
             <input type="submit" id="enviar" value="Enviar" onclick="alert('Gracias por contestar la encuesta');" class="btn btn-dark" />
             
             {!!Form::close()!!}
  </div>
    </div>
     </div>
     
       </div>
        </div>
   </div>


@include('respuestas.footer')
   