<?php include('includes/functions.php');?>
<!DOCTYPE html>
<html>
  <head>
    <title>Greetings from...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel|Delius+Swash+Caps|Short+Stack|Handlee|Sacramento' rel='stylesheet' type='text/css'>
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <script>

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-41759180-2']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
      
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-41759180-2', 'reesenewslab.org');
      ga('send', 'pageview');

    </script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- NAVIGATION BEGINS -->
    <?php $title = ' the Democratic Republic of Congo'; include('includes/nav.php'); ?>
    <!-- NAVIGATION ENDS -->

    <!-- BEGIN MAP -->
    <div onClick="_gaq.push(['_trackEvent', 'Clicked on map', 'Congo']);" id="map" style='text-align: center;'>
      <img src="images/congo_map.png">
    </div>
    <!-- END MAP -->

    <div class="container">
      <div id="postcard" class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="postcard stamp-congo">
            <div class="row">
              <div class="letter col-sm-7 col-xs-12">
                <!-- BEGIN MAIN TEXT ON POSTCARD -->
                <p>We were first introduced to rap music during one of our visits to Mobimbi, a quarter where the foreigners who worked for the same American company as my father lived. We often went to Mobimbi to swim in a pool and watch the huge color television and the white people who crowded the visitors' recreational area. One evening a music video that consisted of a bunch of young black fellows talking really fast came on the television. The four of us sat there mesmerized by the song, trying to understand what the black fellows were saying. At the end of the video, some letters came up at the bottom of the screen. They read <span class="hint" target="_blank" onClick="_gaq.push(['_trackEvent', 'Modal', 'Sugarhill Gang, Rappers Delight']);" data-toggle="modal" data-target="#RappersDelight">"Sugarhill Gang, 'Rapper's Delight.'"</span> Junior quickly wrote it down on a piece of paper. After that, we came to the quarters every other weekend to study that kind of music on television. We didn't know what it was called then, but I was impressed with the fact that the black fellows knew how to speak English really fast, and to the beat.</p>

                <!-- BEGIN SIGNATURE -->
                <p class="signature"><span class="hint" onClick="_gaq.push(['_trackEvent', 'Modal', 'About Ishmael']);" data-toggle="modal" data-target="#AboutIshmael">Ishmael </a></p>

                <!-- ADAPTATION -->
                <p class="sponsor">Excerpt from <i>A Long Way Gone</i></p>
              </div>

              <!-- ADDRESS, ON RIGHT -->
              <div class="address col-sm-5 hidden-xs">
                <p>Ishmael </p>
                <p>Mobimbi</p>
                <p>Democratic Republic of Congo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div id="ask" onClick="_gaq.push(['_trackEvent', 'Modal', 'Ask Ishmael']);" data-toggle="modal" data-target="#AskIshmael">
      Ask Ishmael
    </div>


  <?php
  create_modal(
    'AboutIshmael',
    'Meet Ishmael',
    '<p>Ishmael Beah, born on November 23, 1980, is a former Sierra Leonean child soldier and the author of the published memoir, A Long Way Gone: Memoirs of a Boy Soldier.</p>
     <p><small>Excerpt from <a target="_blank" href="http://www.alongwaygone.com/">A Long Way Gone</a></small></p>
     <p><i>Information will typically be collected from child writers but, for the purpose of this prototype, we\'ve used an excert from Ishmael Beah\'s memoir, A Long Way Gone.</i></p> '
  );

  create_modal(
    'RappersDelight',
    'Sugarhill Gang, Rappers Delight',
    '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/35968337&amp;color=6b012f&amp;auto_play=false&amp;show_artwork=false"></iframe>'
  );

  ask('Ishmael');
  ?>

  
    <footer>
      <p>Notice: By navigating this site, you are agreeing that Reese News Lab may use data about your interactions in its study. No personal information will be collected from this site.</p>
    </footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.scrolldepth.min.js"></script>

    <script>    
    $('#map').click(scroll_to_postcard);
    </script>

    <script src="js/lightbox-2.6.min.js"></script>
  </body>
</html>