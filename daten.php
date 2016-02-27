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


            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-medium-1-1">
                    <h1>Datensatz "<span id="d-title"></span>"</h1>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin="">

                <div class="uk-width-medium-1-2 uk-row-first p-image">

                </div>

                <div class="uk-width-medium-1-2">
                    <div class="p-icon" style="height:80px"></div>
                    <p>Wer: <span class="p-wer"></span></p>
                    <p>Wann: <span class="p-datum"></span></p>
                    <h2>Datensatz</h2>
                    <table class="uk-table">
                    <thead>
                        <tr>
                            <th>Bezeichnung</th><th>Wert</th>
                        </tr>
                    </thead>
                    <tbody class="p-data">

                    </tbody>
                </table>

                </div>

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
  $('.p-image').append('<img width="660" src="diagrams/'+punkt.diagramm+'" />')

  for (i=0;i<6;i++) {

    var was = 'Wert #'+i;
    var wieviel = (Math.random()*100).toFixed(2);
    $('.p-data').append('<tr><td>'+ was + '</td><td>' + wieviel + '</td></tr>');

  }


}


datapage();

                        </script>

                        <?php include('footer.php');
