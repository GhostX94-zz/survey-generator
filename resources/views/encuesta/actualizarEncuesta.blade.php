@include('helper._header')
@include('helper._sidebar')


<!-- Content Wrapper START -->
<div class="main-content">
   <div class="container-fluid">
     <div class="page-hea der">
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
 <div class="row clearfix">
 {!!Form::open(['route'=>'actualizare.update','method'=>'POST','class'=>'"m-t-15'])!!}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                @foreach($preguntas as $indice => $pregunta)
            <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                <label class="control-label" style="border-radius: 15px 50px;background: #ffff;padding: 20px;width: 250px; height: 15px; ">{{$indice+1}}.- {{$pregunta->nombre}}</label>
                    <input type="text" class="form-control" id="{{$pregunta->idPregunta}}" name="cerrada[]">
            <input type="hidden"  class="form-control" id="{{$pregunta->idPregunta}}" name="cerrada[]" value="{{$pregunta->idPregunta}}">
                </div>
            </div>
            @endforeach
            <input type="submit" id="enviar" value="Actualizar" onclick="alert('Actualización correcta');" class="btn btn-dark" />
            </div>
        </div>
        {!!Form::close()!!}
  </div>
    </div>
     </div>
       </div>
        </div>
   </div>
   @include('helper.footer')