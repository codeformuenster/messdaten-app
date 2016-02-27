
function getParameter( name, url ) {
  if (!url) url = location.href;
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec( url );
  return results == null ? null : results[1];
}


function getDate( d ) {
  var date = new Date(d);
  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear();
  return day + '.' + ( monthIndex +1) + '.' + year;
}

function frontpage() {
  var map = L.map('main-map').setView([51.255547, 6.731764], 13);

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);


  var counter = 0;
  $.each( punkte, function( i, punkt ) {


    var icon = 'icon/'+punkt.icon+'.png';


    L.marker(punkt.geo).addTo(map)
    .bindPopup('<div class="p-info"><img class="p-icon" src="'+icon+'" /><b>'+ punkt.name + '</b><br /> ' + punkt.wer
      + '<br /><br clear="left" /><a class="uk-button uk-button-primary" style="color:white;margin-top:10px" href="daten.php?datensatz='+ i +'">Datensatz anschauen &gt;&gt;</a></div>');

    $('#main-projects').append('<div class="uk-width-medium-1-3 uk-row-first"><div class="uk-grid"><div class="uk-width-1-6">'
      +'<img class="pl-icon" src="'+icon+'" />'
      + '</div><div class="uk-width-5-6"><h2 class="uk-h3">'+punkt.name+'</h2>'
                  +'<p>'+punkt.wer+'<br />'+getDate(punkt.datum)
                  +'<a class="uk-button uk-button-primary" style="color:white;display:block;margin-top:10px" href="daten.php?datensatz='+ i +'">Datensatz anschauen &gt;&gt;</a>'
                  +'</p>'
                  +'</div></div></div>'
    );



  });
}
