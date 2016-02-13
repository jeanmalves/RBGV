window.onload = loadScript;

// Função para carregamento assíncrono
  function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src ="http://maps.googleapis.com/maps/api/js?key=AIzaSyBz5P78fVIHpGLJLEbcfV0TAzoexVwlblA&callback=initMap";

  document.body.appendChild(script);
}

function initMap() {
   var mapOptions = {
      center: new google.maps.LatLng(-25.424409, -49.271623),//{lat: -25.424409, lng: -49.271623},
      zoom: 14,
      mapTypeId: google.maps.MapTypeId.ROADMAP
   };
   var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);

   var image = {
    url: VARS_AMBIENTE['WP-JS'] + 'assets/images/icon-mapa.svg',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32)
  };
   var marker = new google.maps.Marker({
      position: new google.maps.LatLng(-25.435161,-49.295873), // variável com as coordenadas Lat e Lng
      map: map,
      icon: image
  });
}
