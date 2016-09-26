<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ota kuva jaloistasi ja jaa se Instagramissa #askeleteen osoittaaksesi kuuluvasi siihen joukkoon, joka vaatii kunnianhimoista ilmastopolitiikkaa!">
    <meta property="og:url" content="http://askeleteenpain.fi/kuvahaaste"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Kuvahaaste"/>
    <meta property="og:description" content="Ota kuva jaloistasi ja jaa se Instagramissa #askeleteen osoittaaksesi kuuluvasi siihen joukkoon, joka vaatii kunnianhimoista ilmastopolitiikkaa!"/>
    <meta property="og:image" content="http://askeleteenpain.fi/img/askeleteenpain_FB_cover.jpg"/>
    <title>Kuvahaaste | Askel eteenpäin</title>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,800italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/my-styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69514794-3', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="index">Askel </br>eteenpäin</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="etusivu">Etusivu</a></li>
          <li><a href="kampanja">Kampanja</a></li>
          <li><a href="kuvahaaste" style="background-color: #03A27E;">Kuvahaaste</a></li>
          <a class="puhekupla luelisaa" style="line-height: 120%" href="testi">Testaa, oletko</br>ilmastoedelläkävijä</a>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- END NAVBAR -->

<!-- SOCIAL PANEL -->
  <div id="socialPanel">
    <ul>
      <li>
      <a rel="Askel eteenpäin" href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;" id="FBShare">FB</a></li>
      
      <li>
        <a rel="Askel eteenpäin" href="#" 
    onclick="
      window.open(
        'https://twitter.com/intent/tweet?button_hashtag=askeleteen&text=Ota%20kuva%20jaloistasi%20ja%20jaa%20se%20Instassa%20osoittaaksesi%20kuuluvasi%20siihen%20joukkoon,%20joka%20vaatii%20kunnianhimoista%20ilmastopolitiikkaa!', 
        'twitter-share-dialog', 
        'width=626,height=436'); 
      return false;" id="TWShare">TW</a>
    </li>
    </ul>
  </div>
<!-- END SOCIAL PANEL -->

  <div id="wrapper">
    <!-- INFO -->
    <div class="container-fluid info box last2">
      <div class="row">
        <div class="col-xs-12">
          <h2>Kuvahaaste</h2>
          <p>Ota kuva jaloistasi ja jaa se Instagramissa #askeleteen osoittaaksesi kuuluvasi siihen joukkoon, joka vaatii kunnianhimoista ilmastopolitiikkaa!</p>
 
          <p><strong>Toimi näin:</strong></p>
          <ol class="haasteol">
            <li>Ota kuva omista jaloistasi valitsemaasi taustaa vasten</li>
            <li>Jaa kuva Instagramissa #askeleteen ja näytä, että vaadit toimia ilmastonmuutoksen hillitsemiseksi</li>
            <li>Käy kirjoittamassa oma ilmastovetoomuksesi ministereille <a class="pienia" href="kampanja#vetoomus">täällä</a>.</li>
          </ol>
          <p class="pienempileipis">Jakamalla kampanjaan liittyvän kuvan annat luvan kuvan käyttämiseen kampanjointitarkoituksissa.</p>
          </br>
          <div id="instafeed">
          </div>
          <a class="luelisaa" id="load-more" style="display: block; clear: both;">Lataa lisää kuvia</a>
        </div>
      </div>
    </div>
    <!-- END INFO -->

<?php include 'footer.php'; ?>

  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/instafeed.min.js"></script>
    <script type="text/javascript" src="js/my-scripts.js"></script>
    <script type="text/javascript">
      var feed = new Instafeed({
          get: 'tagged',
          tagName: 'askeleteen',
          clientId: 'cb3812cd9ee543eabbfe1410c692c127',
          limit: '12',
          resolution: 'standard_resolution',
          template: '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding: 10px 10px 0 0;"><a href="{{link}}"><img class="img-responsive" src="{{image}}" /></a></div>',
          filter: function(image) {
          var blockedUsernames = [
            'gii4'
          ];

          // check for blocked users
          for (var i=0; i<blockedUsernames.length; i++) {
            if (image.user.username === blockedUsernames[i]) {
              return false;
            }
          }

          return true;
        }
      });

      $('#load-more').on('click', function() {
        console.log(feed);
        feed.next();
       });

      feed.run();
    </script>
  </body>
</html>