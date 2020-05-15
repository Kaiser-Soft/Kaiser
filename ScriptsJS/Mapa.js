var customIcon = new L.icon({
    iconUrl: 'images/iconpunto.png',
    iconSize: [38, 50],
    iconAnchor: [22, 45]
});
var customIcon2 = new L.icon({
    iconUrl: 'images/iconpunto2.png',
    iconSize: [38, 50],
    iconAnchor: [22, 45]
});
var map = L.map('map').
    setView([5.30667, -73.8144], 15);

L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    maxZoom: 18
}).addTo(map);
L.control.scale().addTo(map);
//var marcador = L.marker([5.3163164, -73.8134494]).addTo('map').bindPopup('Hola').openPopup();
for (var i = 0; i < lati.length; i++) {

    L.marker([lati[i], longi[i]], { icon: customIcon }).addTo(map).bindPopup("<center><img src='../K/icon.png' width='30px' height='30px'></center>"+"<br>"+"<b>Usuario: </b>"+ user[i]+"<br>"+"<b>Tipo de accidente: </b>"+p2[i]+"<br>"+"<b>Presencia de muertos o heridos: </b>"+p1[i]).openPopup();

}
// for (var i = 0; i < latiS.length; i++) {

//     L.marker([latiS[i], longiS[i]], { icon: customIcon2 }).addTo(map);
    
//     //.bindPopup('Zona skjadhkjasdjasdjasgdjhasdjhasdjhasvdhjasvdhavsghdavsdjvasjasjvasdjvasjhdvasjdvasjdv '+i).openPopup();

// }