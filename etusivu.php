<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ilmastonmuutos on suurin ihmiskuntaa kohdannut haaste. Jos sitä ei saada kuriin, uhkaa maapallosta tulla elinkelvoton. Tule mukaan ja vaadi kanssamme lapsille ja nuorille parempaa tulevaisuutta!">
    <meta property="og:url" content="http://askeleteenpain.fi"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Askel eteenpäin"/>
    <meta property="og:description" content="Ilmastonmuutos on suurin ihmiskuntaa kohdannut haaste. Jos sitä ei saada kuriin, uhkaa maapallosta tulla elinkelvoton. Tule mukaan ja vaadi kanssamme lapsille ja nuorille parempaa tulevaisuutta!"/>
    <meta property="og:image" content="http://askeleteenpain.fi/img/askeleteenpain_FB_cover.jpg"/>
    <title>Askel eteenpäin</title>
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
          <li><a href="etusivu" style="background-color: #03A27E;">Etusivu</a></li>
          <li><a href="kampanja">Kampanja</a></li>
          <li><a href="kuvahaaste">Kuvahaaste</a></li>
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
        'https://twitter.com/intent/tweet?button_hashtag=askeleteen&text=Ilmastonmuutos%20on%20suurin%20ihmiskuntaa%20kohdannut%20haaste.%20Vaadi%20kanssamme%20lapsille%20ja%20nuorille%20parempaa%20tulevaisuutta!', 
        'twitter-share-dialog', 
        'width=626,height=436'); 
      return false;" id="TWShare">TW</a>
    </li>
    </ul>
  </div>
<!-- END SOCIAL PANEL -->

  <div id="wrapper">
    <!-- INFO -->
    <div class="container-fluid info box">
      <div class="row">
        <div class="col-xs-12">
          <h2>Otetaan <span>#askeleteen</span> ilmastonmuutoksen pysäyttämiseksi!</h2>
          <p>Ilmastonmuutos on suurin ihmiskuntaa kohdannut haaste. Jos sitä ei saada kuriin, uhkaa maapallosta tulla elinkelvoton. Tule mukaan ja vaadi kanssamme lapsille ja nuorille parempaa tulevaisuutta! Näytetään päättäjille, että nyt on aika toimia. Otetaan yhdessä #askeleteen. Osallistu jakamalla oma askelkuvasi Instagramissa ja kirjoittamalla vetoomus Suomen päättäjille.</p>
          <a class="luelisaa" href="kampanja">Lue lisää ja kirjoita vetoomus</a>
        </div>
      </div>
    </div>
    <!-- END INFO -->

    <!-- TWITTER AND FB -->
    <div class="container-fluid last">
      <div class="row">
        <div class="col-sm-6 col-xs-12 smallbox">
          <h2>KUVAHAASTE <br><span style="text-transform: ;">#askeleteen</span></h2>
          <div id="instafeed">
          </div>
          <p style="width: 100%;">Jaa oma askelkuvasi Instagramissa tunnisteella #askeleteen ja vaadi parempaa ilmastopolitiikkaa</p>
          <a class="luelisaa" href="kuvahaaste">Lue ohje ja katso lisää kuvia</a>
        </div>
        <div class=" col-sm-6 col-xs-12 smallbox twitter">
          <a class="twitter-timeline" href="https://twitter.com/hashtag/askeleteen" data-widget-id="661815236090052608">#askeleteen twiitit</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </div>
    </div>
    <!-- END TWITTER AND FB -->

<?php include 'footer.php'; ?>

  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/instafeed.min.js"></script>
    <script type="text/javascript">
      var $sections = $('.section-title');

      $sections.filter(':nth-child(3n-2)').each(function () {
          var $this = $(this),
              $els = $this.nextAll(':lt(2)').addBack();

          var sectionheight = new Array();
          $els.each(function () {
              var value = $(this).height();
              sectionheight.push(value);
          });
          var newsectionheight = Math.max.apply(Math, sectionheight);
          $els.height(newsectionheight);
      })

    </script>
        <script type="text/javascript">
      var feed = new Instafeed({
          get: 'tagged',
          tagName: 'askeleteen',
          clientId: 'cb3812cd9ee543eabbfe1410c692c127',
          limit: '1',
          links: true,
          resolution: 'standard_resolution',
          template: '<div class="col-sm-12 col-xs-12" style="padding: 0 10px 20px 0;"><a href="{{link}}"><img class="img-responsive" src="{{image}}" /></a></div>',
          filter: function(image) {
          var blockedUsernames = [
            'gii4',
            'seasonsofmari'
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
      feed.run();
    </script>
  </body>
</html>