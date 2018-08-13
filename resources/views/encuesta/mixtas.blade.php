<div class="col-md-6" >
     <div class="p-h-10" id="mixtas">
     {!!Form::open(['route'=>'encuesta.store','method'=>'POST','class'=>'"m-t-15'])!!}
     <input type="hidden"  class="form-control" id="tipoEncuesta" name="tipoEncuesta" value="Mixtas">
         <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label"><b>Titulo</b></label>
                         <input type="text" class="form-control" id="titulo" name="titulo">
                     </div>
                 </div>
             <div class="form-row">

        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input type="text" class="form-control" id="p1" name="mixta[]">
               <label for="">Pregunta 1</label>
             </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input type="text" class="form-control" id="p2" name="mixta[]">
               <label for="">Pregunta 2</label>
             </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input type="text" class="form-control" id="p3" name="mixta[]">
               <label for="basicFormRadio1">Pregunta 3</label>
             </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input type="text" class="form-control" id="p4" name="mixta[]">
               <label for="">Pregunta 4</label>
             </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input type="text" class="form-control" id="p5" name="mixta[]">
               <label for="">Pregunta 5</label>
             </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input type="text" class="form-control" id="p6" name="mixta[]">
               <label for="">Pregunta 6</label>
             </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input type="text" class="form-control" id="p7" name="mixta[]">
               <label for="">Pregunta 7</label>
             </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 8</label>
             </div>
             <input type="text" class="form-control" id="p8" name="mixta[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 9</label>
             </div>
             <input type="text" class="form-control" id="p9" name="mixta[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 10</label>
             </div>
             <input type="text" class="form-control" id="p10" name="mixta[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 11</label>
             </div>
             <input type="text" class="form-control" id="p11" name="mixta[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 12</label>
             </div>
             <input type="text" class="form-control" id="p12" name="mixta[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 13</label>
             </div>
             <input type="text" class="form-control" id="p13" name="mixta[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 14</label>
             </div>
             <input type="text" class="form-control" id="p14" name="mixta[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 15</label>
             </div>
             <input type="text" class="form-control" id="p15" name="mixta[]">
            </div>
        </div>

             </div>

             <input type="submit" id="generar" value="Generar" onclick="" class="bt btn btn-success" />
        {!!Form::close()!!}
     </div>
 </div
