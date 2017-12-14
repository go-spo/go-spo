$(document).ready(function () {
    $.ajax({
        url: 'php/deportes.php',
        dataType: 'json',
        success: function (miCategorias) {
            console.log(miCategorias);
            //  <option value="0">Deportes</option>
            miCategorias.forEach(n => $("#deportes-browser").append("<option value="
                        + n.id_deporte + ">" + n.nombre + "</option>"));
        }
    });
});