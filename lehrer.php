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
                    <h1><i class="uk-icon-group"></i> Projekt erstellen</h1>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin="">

                <div class="uk-width-medium-1-2 uk-row-first">

                  <form class="uk-form uk-width-medium-1-1">

                                  <fieldset>
                                      <legend><i class="uk-icon-edit"></i> Gruppenbeschreibung</legend>
                                      <div class="uk-form-row">
                                          <input type="text" class="uk-width-1-1" placeholder="Name der Organisation, z.B. 'Marienschule'">
                                      </div>

                                      <div class="uk-form-row">
                                          <input type="text" class="uk-width-1-1" placeholder="Name der Gruppe, z.B. 'Klasse 6c'">
                                      </div>

                                      <div class="uk-form-row">
                                          <input type="text" class="uk-width-1-1" placeholder="Dein Name">
                                      </div>

                                      <div class="uk-form-row">
                                          <textarea cols="30" rows="5" placeholder="Beschreibung des Datensatzes"></textarea>
                                      </div>
                                  </fieldset>

                                  <br />

                                <fieldset class="uk-margin">
                                    <legend><i class="uk-icon-dot-circle-o"></i> Datenpunkte</legend>

                                    <div class="uk-form-row">

                                        <input type="text" class="uk-width-1-2" placeholder="Titel">

                                        <select id="form-s-s">
                                              <option> -- Datentyp -- </option>
                                              <option> Anzahl </option>
                                              <option> Gewicht </option>
                                              <option> Größe </option>
                                              <option> Länge </option>
                                              <option> Freitext </option>
                                          </select>

                                        </div>
                                        <div class="uk-form-row">

                                          <button class="uk-button uk-width-1-1"><i class="uk-icon-dot-circle-o"></i> Datenpunkt hinzufügen</button>

                                        </div>
                                </fieldset>


                                    <br />

                                  <fieldset class="uk-margin">
                                      <legend><i class="uk-icon-user"></i> Gruppenmitglieder</legend>

                                      <div class="uk-form-row">
                                          <input type="text" class="uk-width-1-2" placeholder="Mitgliedsname">
                                          <button class="uk-button uk-button-primary"><i class="uk-icon-user"></i> Gruppenmitglied hinzufügen</button>
                                      </div>
                                  </fieldset>


                                            </form>


                </div>

                <div class="uk-width-medium-1-2">
                   Hier kannst Du eine neue Gruppe erstellen.
                   Zum Beispiel eine Schulklasse.
                   Gib der Gruppe einen Namen, lege die zu sammelnden Datenpunkte fest, und füge Gruppenmitglieder hinzu.
                </div>

            </div>

            <hr class="uk-grid-divider">

            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-medium-1-1 uk-row-first">
                    <div class="uk-panel uk-panel-box uk-text-center">
                        <p>Wenn Du mit der Definition der Gruppe fertig bist: <a class="uk-button uk-button-primary uk-margin-left" href="/">Gruppe speichern</a></p>
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
