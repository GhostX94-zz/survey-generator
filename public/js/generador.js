$(document).ready(function () {

    $("#ops").on('keyup', function (e) {
    
    $('#radios').html('');
    var num = parseInt($("#ops").val());

    if(num > 6){
        alert("has superado el máximo rango de entradas");
        $('#myModal').modal('toggle');
        $("#ops").val(" ");
        $('#radios').html('');
    }else{
    var i;
    for (i = 0; i < num; i++) { 
        $("#radios").append('<br/><input type="text" class="form-control" id="radios" name="radios[]"><br/>');
        console.log(num);
    }
        }
    });
});

function Guardar(e){
    $('input[name="radios[]"]').each(function() {
        alert($(this).val());
    });
}

function showModal(data)
{
   $('#radios').html('');
   $("#ops").val("");
   $("#myModal .modal-title").html(data.name)
   $("#myModal").modal();
}