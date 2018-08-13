<div class="col-md-6" id=abiertas>
     <div class="p-h-10">
     <?php echo Form::open(['route'=>'encuesta.store','method'=>'POST','class'=>'"m-t-15']); ?>

     <input type="hidden"  class="form-control" id="tipoEncuesta" name="tipoEncuesta" value="Abiertas">
         <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label"><b>Titulo</b></label>
                         <input type="text" class="form-control" id="titulo" name="titulo">
                     </div>
                 </div>

             <div class="form-row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 1</label>
                         <input type="text" class="form-control" id="p1" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 2</label>
                         <input type="text" class="form-control" id="p2" name="abierta[]">
                     </div>
                 </div>
                <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 3</label>
                         <input type="text" class="form-control" id="p3" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 4</label>
                         <input type="text" class="form-control" id="p4" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 5</label>
                         <input type="text" class="form-control" id="p5" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 6</label>
                         <input type="text" class="form-control" id="p6" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 7</label>
                         <input type="text" class="form-control" id="p7" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 8</label>
                         <input type="text" class="form-control" id="p8" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 9</label>
                         <input type="text" class="form-control" id="p9" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 10</label>
                         <input type="text" class="form-control" id="p10" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 11</label>
                         <input type="text" class="form-control" id="p11" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 12</label>
                         <input type="text" class="form-control" id="p12" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 13</label>
                         <input type="text" class="form-control" id="p13" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 14</label>
                         <input type="text" class="form-control" id="p14" name="abierta[]">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="control-label">Pregunta 15</label>
                         <input type="text" class="form-control" id="p15" name="abierta[]">
                     </div>
                 </div>
             </div>
             <input type="submit" id="generar" value="Generar" onclick="" class="bt btn btn-success" />
             <?php echo Form::close(); ?>

     </div>
    </div>
