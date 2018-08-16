<div class="col-md-6" id="cerradas">
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
               
               <label class="control-label">Pregunta 1</label>
             </div>
             <input type="button" id="p1" value="+" name="Pregunta 1" class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             
             <input type="text" class="form-control" id="p1" name="cerrada[]">
             
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 2</label>
             </div>
             <input type="button" id="p2" name="Pregunta 2" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p2" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 3</label>
             </div>
             <input type="button" id="p3" name="Pregunta 3" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p3" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 4</label>
             </div>
             <input type="button" id="p4" name="Pregunta 4" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p4" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 5</label>
             </div>
             <input type="button" id="p5" name="Pregunta 5" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p5" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 6</label>
             </div>
             <input type="button" id="p6" name="Pregunta 6" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p6" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 7</label>
             </div>
             <input type="button" id="p7"  name="Pregunta 7" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p7" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 8</label>
             </div>
             <input type="button" id="p8" name="Pregunta 8" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p8" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 9</label>
             </div>
             <input type="button" id="p9" name="Pregunta 9" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p9" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 10</label>
             </div>
             <input type="button" id="p10" name="Pregunta 10" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p10" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <label class="control-label">Pregunta 11</label>
             </div>
             <input type="button" id="p11" name="Pregunta 11" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p11" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 12</label>
             </div>
             <input type="button" id="p12" name="Pregunta 12" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p12" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               
               <label class="control-label">Pregunta 13</label>
             </div>
             <input type="button" id="p13" name="Pregunta 13" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p13" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <label class="control-label">Pregunta 14</label>
             </div>
             <input type="button" id="p14" name="Pregunta 14" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p14" name="cerrada[]">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <div class="radio d-inline m-r-15">
               <label class="control-label">Pregunta 15</label>
             </div>
             <input type="button" id="p15" name="Pregunta 15" value="+"  class="btn btn-dark" data-toggle="modal" onclick="showModal(this)"/>
             <input type="text" class="form-control" id="p15" name="cerrada[]">
            </div>
        </div>
            </div>
             <input type="submit" id="generar" value="Generar" onclick="" class="bt btn btn-success" />
             <div class="social">
		<ul>
			<!--<li><a href="#" class="icon-facebook">Agregar Opción</a></li>-->
		</ul>
	</div>
    <div id="arreglo"></div>
        <?php echo Form::close(); ?>

     </div>
 </div>
 <?php echo $__env->make('modals.preguntas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 