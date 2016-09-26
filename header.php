<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ilmastonmuutos on suurin ihmiskuntaa kohdannut haaste. Jos sitä ei saada kuriin, uhkaa maapallosta tulla elinkelvoton. Tule mukaan ja vaadi kanssamme lapsille ja nuorille parempaa tulevaisuutta!">
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
          <li><a href="/" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'current'; }else { echo ''; } ?>">Etusivu</a></li>
          <li><a href="kampanja" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'kampanja.php'){echo 'current'; }else { echo ''; } ?>">Kampanja</a></li>
          <li><a href="kuvahaaste" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'kuvahaaste.php'){echo 'current'; }else { echo ''; } ?>">Kuvahaaste</a></li>
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