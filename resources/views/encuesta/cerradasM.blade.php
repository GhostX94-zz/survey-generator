

<style>
body{
    color: black;
}

</style>

<!-- Content Wrapper START -->
<div class="container">
   <div class="container-fluid">
     <div class="page-header">
     <h2 class="header-title"></h2>
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
 <h2 class="header-title"><b>{{$title}}</b></h2>

                 @foreach($preguntas as $indice => $pregunta)
                 <div class="form-row">
                 <div class="col-md-12">
                     <div class="form-group">
                     <label class="control-label" style="border-radius: 15px 50px;background: #ffff;padding: 20px;width: 250px; height: 15px; "></label>
                         <br/>
                         <div class="col-md-12">
                         <fieldset id="cerrada-{{$pregunta->idPregunta}}">
                         <label class="control-label" >{{$pregunta->nombre}}</label>
                         <input  name="cerrada[]-{{$pregunta->idPregunta}}" type="radio" value="{{$pregunta->opcion}}">
                         </fieldset>
                         </div>
                         <br/>
                         <div class="col-md-12">
                         </div>
                     </div>
                 </div>
                 </div>
             @endforeach
             
  </div>
    </div>
     </div>
     
       </div>
        </div>
   </div>



   