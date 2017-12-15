$(document).ready(function () {
    $.ajax({
        url: 'php/categorias.php',
        dataType: 'json',
        success: function (miCategorias) {
           
            console.log(miCategorias[1]);
            //  <option value="0">Deportes</option>
            
            miCategorias[0].forEach(n => $("#deportes-browser").append("<option value="
                        + n.id_deporte + ">" + n.nombre + "</option>"));
                
            miCategorias[1].forEach(n => $("#ciudades-browser").append("<option value="
                        + n.provincia + ">" + n.provincia + "</option>"));
        }
    });
});