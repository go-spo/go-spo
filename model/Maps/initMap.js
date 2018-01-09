$(document).ready(function () {
    var markadores = [];
    var centrado = {lat: 39.478758, lng: -0.414405};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: centrado

    });
    $.ajax({

        url: '../model/Maps/initMap.php',
        dataType: 'json',
        success: function (markers) {
            console.log("hola");
            markers.forEach(n => {
                var posicion = new google.maps.LatLng(n.coordenada_x, n.coordenada_y);
                var infowindow = new google.maps.InfoWindow({
                    content: n.nombre
                });
                var marker = new google.maps.Marker({
                    position: posicion,
                    map: map
                });
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });

            });
        }
    });
});
