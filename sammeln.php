<!DOCTYPE html>
<!-- saved from url=(0047)http://getuikit.com/docs/layouts_frontpage.html -->
<html lang="en-gb" dir="ltr" class="uk-notouch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Frontpage layout example - UIkit documentation</title>
        <link rel="shortcut icon" href="http://getuikit.com/docs/images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="http://getuikit.com/docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="./index_files/uikit.docs.min.css">
        <script src="./index_files/jquery.js"></script>
        <script src="./index_files/uikit.min.js"></script>

                  <link href='https://fonts.googleapis.com/css?family=Raleway:900' rel='stylesheet' type='text/css'>

        	<!-- Leaflet -->
        	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
        	<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
          <link rel="stylesheet" href="app.css" />

    </head>

    <body>

                  <?php include('navigation.php'); ?>

            <div class = "uk-form">
              <form class="uk-form">
                <fieldset data-uk-margin>
                  <legend>Testdaten eingeben</legend>
                  <div class="uk-form">
                  <select>
                    <option>Tomatenprojekt</option>
                    <option>Physik Testdaten</option>
                    <option>Autovorkommen</option>
                  </select>
                  </div>
                  <input type="text" placeholder="Tomatenart">
                  <input type="text" placeholder="Gewicht">
                  <select>
                    <option>Gramm in g</option>
                    <option>Kilogramm in kg</option>
                  </select>
                  <button class="uk-submit">submit</button>
                  <!-- <button class="uk-button">...</button>
                  <label><input type="checkbox"> ...</label> -->
                </fieldset>
              </form>
            </div>


            <hr class="uk-grid-divider">

            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-medium-1-1 uk-row-first">
                    <div class="uk-panel uk-panel-box uk-text-center">
                        <p>Diese Datensammlung ist <strong>fertig</strong>. <a class="uk-button uk-button-primary uk-margin-left" href="/">zurück zur Startseite</a></p>
                    </div>
                </div>
            </div>
        </div>

                                <script src="data.js"></script>

                        <script src="app.js"></script>

                        <script>

function datapage() {

  var current = getParameter('datensatz');
  var punkt = punkte[current];

    var icon = 'icon/'+punkt.icon+'.png';
  $('#d-title').html(punkt.name);
  $('.p-wer').html(punkt.wer);
  $('.p-datum').html(getDate(punkt.datum));
  $('.p-icon').append('<img class="pl-icon" src="'+icon+'" /><br />');


  for (i=0;i<6;i++) {

    var was = 'Wert #'+i;
    var wieviel = (Math.random()*100).toFixed(2);
    $('.p-data').append('<tr><td>'+ was + '</td><td>' + wieviel + '</td></tr>');

  }


}


datapage();

                        </script>

                        <?php include('footer.php');
