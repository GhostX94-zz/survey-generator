<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<style>
body {
font: 13px verdana;
font-weight: normal;
}
</style>
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
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Select...
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="#" id="btCerrada">Cerradas</a></li>
        <li><a href="#" id="btAdd">Abiertas</a></li>
        <li><a href="#" id="btMixtas">Mixtas</a></li>
        <li role="separator" class="divider"></li>
    </ul>
    </div>
 </div>
<div class="card-body">
<div class="row">
 <div class="col-sm-8">
     <div id="main">
        <!--<input type="button" id="btAdd" value="Añadir Pregunta" class="bt btn btn-warning" />-->
        <div id="result" class="col-sm-12"></div>
    <div>
  </div>
    </div>
     </div>
       </div>
        </div>
   </div>
                <!-- Content Wrapper END -->
<script>

 $(document).ready(function() {
        var iCnt = 0;
        var iCnt2 = 0;

// Crear un elemento div añadiendo estilos CSS
        var container = $(document.createElement('div')).css({
            padding: '0px', margin: '20px', width: '190px', border: '0px dashed',
            borderTopColor: '#999', borderBottomColor: '#999',
            borderLeftColor: '#999', borderRightColor: '#999'
        });


        $('#btCerrada').click(function() {
            if (iCnt2 <= 14) {
                iCnt2 = iCnt2 + 1;
            $(container).append('<input type=radio name="optradio" id=tbt' + iCnt2 +'" />');
            }
                            if (iCnt2 == 1) {

            var divSubmit2 = $(document.createElement('div'));
            $(divSubmit2).append('<input type=button class="bt btn btn-success" onclick="GetTextValue()"' +
                           'id=btSubmit value=Generar PDF />');

               }
        });
        $('#btAdd').click(function() {
            if (iCnt <= 14) {

                iCnt = iCnt + 1;

                // Añadir caja de texto.
                $(container).append('<input type=text class="input" id=tb' + iCnt + ' ' +
                            'value="Escriba su pregunta ' + iCnt + '" />');

                if (iCnt == 1) {

 var divSubmit = $(document.createElement('div'));
                    $(divSubmit).append('<input type=button class="bt btn btn-success" onclick="GetTextValue()"' +
                            'id=btSubmit value=Enviar />');

                }

 $('#main').after(container, divSubmit);
            }
            else {      //se establece un limite para añadir elementos, 20 es el limite

                $(container).append('<label>Limite Alcanzado</label>');
                $('#btAdd').attr('class', 'bt-disable btn btn-warning');
                $('#btAdd').attr('disabled', 'disabled');

            }
        });

        $('#btRemove').click(function() {   // Elimina un elemento por click
            if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }

            if (iCnt == 0) { $(container).empty();

                $(container).remove();
                $('#btSubmit').remove();
                $('#btAdd').removeAttr('disabled');
                $('#btAdd').attr('class', 'bt btn btn-warning')

            }
        });

        $('#btRemoveAll').click(function() {    // Elimina todos los elementos del contenedor

            $(container).empty();
            $(container).remove();
            $('#btSubmit').remove(); iCnt = 0;
            $('#btAdd').removeAttr('disabled');
            $('#btAdd').attr('class', 'bt');

        });
    });

    // Obtiene los valores de los textbox al dar click en el boton "Enviar"
    var divValue, values = '';

    function GetTextValue() {

        $(divValue).empty();
        $(divValue).remove(); values = '';

        $('.input').each(function() {
            divValue = $(document.createElement('div')).css({
                padding:'5px', width:'200px'
            });
            values += this.value + '<br />'
        });


        $(divValue).append('<p><b>Tus valores de la encuesta son: </b></p>' + values);
        $('#result').append(divValue);

    }
</script>
