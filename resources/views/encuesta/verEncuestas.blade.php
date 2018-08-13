@include('helper.header_')
@include('helper.sidebar_')
<!-- Content Wrapper START -->
<div class="main-content">
   <div class="container-fluid">
     <div class="page-header">
     <div class="form-check">
    <input type="radio" class="form-radio-input" id="genero" name="genero">
    <label class="form-check-label" for="exampleCheck1">Hombre</label>
  </div>
  <div class="form-check">
    <input type="radio" class="form-radio-input" id="genero" name="genero">
    <label class="form-check-label" for="exampleCheck1">Mujer</label>
  </div>
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
    {{ Form::open(['url' => ['getEncuestaByid',$encuesta], 'id' => 'form','method'=>'GET','class'=>'"m-t-15']) }} 
    <input type="submit"  value="{{$encuesta}}" class="bt btn btn-danger" />
    {!!Form::close()!!}
    @endforeach
  </div>
    </div>
     </div>
     
       </div>
        </div>
   </div>
   @include('helper.footer')