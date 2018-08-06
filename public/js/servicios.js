function getEncuestaById(id) {
    var currentLocation =
        this.location.origin +
        this.location.pathname.replace('inicio', 'getPreguntaByTipo');
}

$(document).ready(function () {
    $('#Cerradas').on('click', function (e) {
        alert("ok");
    });
    $('#Abiertas').on('click', function (e) {
        alert("lol");
    });
    $('#Mixtas').on('click', function (e) {
        alert("oasdk");
    });
});
var count = 0;

function get(id) {
    var currentLocation =
        this.location.origin +
        this.location.pathname.replace('inicio', 'getPreguntaByTipo');
    $('#' + id.id).on('click', function (e) {
        var idTipoEncuesta = $('#' + id.id).text();

        $.get(currentLocation + '/' + idTipoEncuesta, function (message) {});
    });
}


function post(id) {
    var _token = $("input[name='csrf-token']").val();
    var titulo = $("#titulo").val();
    //var tipos = id
    $.ajax({
        url: currentLocation,
        type: 'POST',
        data: {
            _token: _token,
            request: tipos,
            titulo: titulo,
        },
        success: function (data) {

        },
    });
}
