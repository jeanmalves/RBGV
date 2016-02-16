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
    url: VARS_AMBIENTE['WP-JS'] + 'assets/images/map-marker.png',
  };
   var marker = new google.maps.Marker({
      position: new google.maps.LatLng(-25.435161,-49.295873), // variável com as coordenadas Lat e Lng
      map: map,
      icon: image
  });
}
