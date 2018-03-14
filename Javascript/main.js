function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(51.5100946,-0.1367563),
        zoom: 20,
        mapTypeId: 'roadmap'
    }
var map = new google.maps.Map(document.getElementById("coffeeMap"), mapOptions);
}
