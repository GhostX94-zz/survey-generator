$(document).ready(function () {

    $("#ops").on('keyup', function (e) {
    
    $('#radios').html('');
    var num = parseInt($("#ops").val());
    var id = $(".modal-title").text().split(' ')[1];

    if(num > 6){
        alert("has superado el máximo rango de entradas");
        $('#myModal').modal('toggle');
        $("#ops").val(" ");
        $('#radios').html('');
    }else{
    var i;
    for (i = 0; i < num; i++) { 
        $("#radios").append('<br/><input type="text" class="form-control" id="'+id+'" name="radios[]"><br/>');
        console.log(num);
        }
        //if($('input#p'+id+'[name="cerrada[]"]').val().length > 0){

        var value = $('input#p'+id+'[name="cerrada[]"]').val();
        $('input#p'+id+'[name="cerrada[]"]').val(num+"-"+value);
        //}
    }
    });

    $("#guardar").on('click',function(){
        $('input[name="radios[]"]').each(function() {

    $("#arreglo").append('<br/><input type="hidden" class="form-control" id="p'+this.id+'" name="radios2[]" value="p'+this.id+'-'+$(this).val()+'"><br/>');
            
            //alert($(this).val());
        });
    });


});


function showModal(data)
{
   $('#radios').html('');
   $("#ops").val("");
   $("#myModal .modal-title").html(data.name)
   $("#myModal").modal();
}