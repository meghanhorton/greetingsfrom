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
    <?php $title = ' Nepal'; include('includes/nav.php'); ?>
    <!-- NAVIGATION ENDS -->

    <!-- BEGIN MAP -->
    <div onClick="_gaq.push(['_trackEvent', 'Clicked on map', 'Nepal']);"  id="map" style='text-align: center;'>
      <img src="images/everest_map.png">
    </div>
    <!-- END MAP -->

    <div class="container">
      <div id="postcard" class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="postcard stamp-nepal">
            <div class="row">
              <div class="letter col-sm-7 col-xs-12">
                <!-- BEGIN MAIN TEXT ON POSTCARD -->
                <p>The tallest mountain in the world loomed in front of 16-year-old Temba Tsheri <span class="hint" onClick="_gaq.push(['_trackEvent', 'Modal', 'Sherpa']);" data-toggle="modal" data-target="#Sherpa">Sherpa</span>. He had always dreamed of climbing Mount Everest. Now all Temba could think about was surviving the 29,035-foot climb to the top. </p>
                <p>One of the youngest people ever to summit Everest, Temba is a Sherpa &mdash; a member of an ethnic group that lives mainly in Nepal, in the Himalaya mountains. Living in mountain villages as high as 14,000 feet, with no roads or cars, Sherpas hike everywhere and lug everything on their backs &mdash; even TVs and refrigerators. Some kids even climb 1,500-foot slopes to get to school. That's equal to 150 stories! </p>
                <p>Without his heritage, Temba might have given up. As he climbed past 26,000 feet, he had never felt so tired. But finally he took the last step and stood on Everest&mdash;the top of the world. "I felt like I had won the World Cup!" Temba says. He knew his success was a triumph for his people.</p>

                <!-- BEGIN SIGNATURE -->
                <p class="signature"><span class="hint" onClick="_gaq.push(['_trackEvent', 'Modal', 'About Prashant']);" data-toggle="modal" data-target="#AboutPrashant">Prashant</a></p>

                <!-- ADAPTATION -->
                <p class="sponsor">Adapted from <i>National Geographic Kids</i></p>
              </div>

              <!-- ADDRESS, ON RIGHT -->
              <div class="address col-sm-5 hidden-xs">
                <p>Prashant</p>
                <p>Katmandu, Nepal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div id="ask" onClick="_gaq.push(['_trackEvent', 'Modal', 'Ask Prashant']);" data-toggle="modal" data-target="#AskPrashant">
      Ask Prashant
    </div>




    <!-- POPUPS -->

    <?php
    create_modal(
      'AboutPrashant',
      'Meet Prashant',
      '<p>Prashant is a 13-year-old from Katmandu, Nepal. His favorite things to do are read and play soccer, and his favorite team is FC Barcelona. He enjoys hanging out with his older brothers and hopes that one day he will have the chance to see Barca play in Camp Nou.</p>
      <p><small>Adapted from <a target="_blank" href="http://kids.nationalgeographic.com/kids/stories/peopleplaces/sherpa/">National Geographic Kids</a></small></p>
      <p><i>Information will typically be collected from kids living in underrepresented countries but, for the purpose of this prototype, we\'ve used previously published stories from National Geographic Kids.</i></p>
      '
    );

    create_modal(
      'Sherpa',
      'Learn to speak Sherpa',
      '   <ul>
            <li><b>Thanks:</b> thuche (too-chay)</li>
            <li><b>Fun:</b> gha (gah)</li>
            <li><b>Mountain:</b> ka (ka)</li>
            <li><b>Snow:</b> khâ (kah)</li>
            <li><b>Path:</b> lam (lam)</li>
          </ul>
      '
    );

    ask('Prashant');

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
  </body>
</html>