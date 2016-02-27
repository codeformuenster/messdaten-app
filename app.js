

var map = L.map('main-map').setView([51.505, -0.09], 13);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);




var counter = 0;
$.each( punkte, function( i, punkt ) {


  var icon = 'icon/'+punkt.icon+'.png';


  L.marker(punkt.geo).addTo(map)
  .bindPopup('<div class="p-info"><img class="p-icon" src="'+icon+'" />'+ punkt.name + '<br /> ' + punkt.wer
    + '<br /><br clear="left" /><a href="daten.php?datensatz='+ i +'">Datensatz anschauen &gt;&gt;</a></div>');

  $('#main-projects').append('<div class="uk-width-medium-1-3 uk-row-first"><div class="uk-grid"><div class="uk-width-1-6">'
    +'<img class="pl-icon" src="'+icon+'" />'
    + '</div><div class="uk-width-5-6"><h2 class="uk-h3">'+punkt.name+'</h2>'
                +'<p>'+punkt.wer+'</p></div></div></div>'
  );



});
