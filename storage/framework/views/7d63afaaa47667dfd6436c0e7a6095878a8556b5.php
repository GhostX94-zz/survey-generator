<div class="col-md-6" id=cerradas>
     <div class="p-h-10">
     <?php echo Form::open(['route'=>'encuesta.store','method'=>'POST','class'=>'"m-t-15']); ?>

     <input type="hidden"  class="form-control" id="tipoEncuesta" name="tipoEncuesta" value="Cerradas">
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
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 1</label>
             </div>
             <input type="text" class="form-control" id="p1" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 2</label>
             </div>
             <input type="text" class="form-control" id="p2" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 3</label>
             </div>
             <input type="text" class="form-control" id="p3" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 4</label>
             </div>
             <input type="text" class="form-control" id="p4" name="cerrada[]">>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 5</label>
             </div>
             <input type="text" class="form-control" id="p5" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 6</label>
             </div>
             <input type="text" class="form-control" id="p6" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 7</label>
             </div>
             <input type="text" class="form-control" id="p7" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 8</label>
             </div>
             <input type="text" class="form-control" id="p8" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 9</label>
             </div>
             <input type="text" class="form-control" id="p9" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 10</label>
             </div>
             <input type="text" class="form-control" id="p10" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 11</label>
             </div>
             <input type="text" class="form-control" id="p11" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 12</label>
             </div>
             <input type="text" class="form-control" id="p12" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 13</label>
             </div>
             <input type="text" class="form-control" id="p13" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 14</label>
             </div>
             <input type="text" class="form-control" id="p14" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
               <label for="basicFormRadio1">Pregunta 15</label>
             </div>
             <input type="text" class="form-control" id="p15" name="cerrada[]">
            </div>
        </div>
            </div>
             <input type="submit" id="generar" value="Generar" onclick="" class="bt btn btn-success" />
        <?php echo Form::close(); ?>

     </div>
 </div
