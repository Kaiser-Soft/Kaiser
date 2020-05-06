// Se pide ubicación con el metod nativo del navegador
if ("geolocation" in navigator) { //check Geolocation available 
   
} else {
    console.log("Geolocation not available!");
}

if ("geolocation" in navigator) { //check geolocation available 
    //try to get user current location using getCurrentPosition() method
    navigator.geolocation.getCurrentPosition(function (position) {
        var latitudeVar= position.coords.latitude;
        var longitudeVar = position.coords.longitude;
        console.log("Found your location nLat : " + latitudeVar + " nLang :" + longitudeVar);
    });
} else {
    console.log("Browser doesn't support geolocation!");
}