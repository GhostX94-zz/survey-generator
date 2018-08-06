function getEncuestaById (id) {
  var currentLocation =
    this.location.origin +
    this.location.pathname.replace ('inicio', 'getPreguntaByTipo');
}

/*$ (document).ready (function () {});*/
var count = 0;

function get (id) {
  var currentLocation =
    this.location.origin +
    this.location.pathname.replace ('inicio', 'getPreguntaByTipo');
  $ ('#' + id.id).on ('click', function (e) {
    var idTipoEncuesta = $ ('#' + id.id).text ();

    $.get (currentLocation + '/' + idTipoEncuesta, function (message) {});
  });
}
