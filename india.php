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
    <?php $title = ' India'; include('includes/nav.php'); ?>
    <!-- NAVIGATION ENDS -->

    <!-- BEGIN MAP -->
    <div onClick="_gaq.push(['_trackEvent', 'Clicked on map', 'India']);" id="map" style='text-align: center;'>
      <img src="images/Path/map_start.png">
    </div>
    <!-- END MAP -->

    <div class="container">
      <div id="postcard" class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="postcard stamp-india">
            <div class="row">
              <div class="letter col-sm-7 col-xs-12">
                <!-- BEGIN MAIN TEXT ON POSTCARD -->
                <p>Do you know how many tigers there are in India? Take a guess... Ok this is the answer...there are about 1,000 in India and about 3,000 in the world. A century ago there were 40,000 tigers just in India and about 80,500 tigers in the world!</p>
                <p>It is really sad, the numbers have declined because people have been hunting them. Many animal protection groups throughout the world are trying to put an end to this.</p>

                <!-- BEGIN SIGNATURE -->
                <p class="signature">
                  <span class="hint" onClick="_gaq.push(['_trackEvent', 'Modal', 'About Aubrey']);" data-toggle="modal" data-target="#AboutAubrey">Aubrey</span>
                  <a onClick="_gaq.push(['_trackEvent', 'Photo Gallery', 'India Photo Gallery']);" href="http://farm3.staticflickr.com/2174/2155265889_91096773b5_b.jpg" 
                  data-lightbox="nationalpark" 
                  title="<b>Ranthambor National Park</b><br>Photo credit: Flickr / <a href='http://www.flickr.com/photos/pauljill/2155265889/'>Paul and Jill</a>">
                  <i style="font-size: 25px;" class="glyphicon glyphicon-camera glphyicon-lg"></i>
                  </a>
                </p>

                <!-- ADAPTATION -->
                <p class="sponsor">Adapted from <i>National Geographic Kids</i></p>

                <!-- PHOTO GALLERY -->
                
                 <div style="display: none;">
                    <a href="http://farm3.staticflickr.com/2079/2156066360_e3efdfc1af_b.jpg" 
                     data-lightbox="nationalpark" 
                     title="<b>Panthera tigris, Ranthambor National Park</b><br>Photo credit: Flickr / <a href='http://www.flickr.com/photos/pauljill/2156066360/'>Paul and Jill</a>"></a>

                     <a href="http://farm3.staticflickr.com/2102/2155269175_b8f21eaa4c_b.jpg" 
                     data-lightbox="nationalpark" 
                     title="<b>Crocodylus palustris, Ranthambor National Park</b><br>Photo credit: Flickr / <a href='http://www.flickr.com/photos/pauljill/2155269175'>Paul and Jill</a>"></a>

                     <a href="http://farm3.staticflickr.com/2337/2156067922_c2f938f513_b.jpg" 
                     data-lightbox="nationalpark" 
                     title="<b>Ranthambor National Park</b><br>Photo credit: Flickr / <a href='http://www.flickr.com/photos/pauljill/2156067922'>Paul and Jill</a>"></a>

                     <a href="http://farm3.staticflickr.com/2048/2156067368_7a2dddcbc1_b.jpg" 
                     data-lightbox="nationalpark" 
                     title="<b>Ranthambor National Park</b><br>Photo credit: Flickr / <a href='http://www.flickr.com/photos/39136124@N00/2156067368/'>Paul and Jill</a>"></a>
                 </div>
              </div>

              <!-- ADDRESS, ON RIGHT -->
              <div class="address col-sm-5 hidden-xs">
                <p>Aubrey</p>
                <p><span class="hint" onClick="_gaq.push(['_trackEvent', 'Modal', 'National Park']);" data-toggle="modal" data-target="#NatPark">Ranthambhor National Park</span></p>
                <p>India</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div id="ask" onClick="_gaq.push(['_trackEvent', 'Modal', 'Ask Aubrey']);" data-toggle="modal" data-target="#AskAubrey">
      Ask Aubrey
    </div>

    <footer>
      <p>Notice: By navigating this site, you are agreeing that Reese News Lab may use data about your interactions in its study. No personal information will be collected from this site.</p>
    </footer>

    <!-- POPUPS, INCLUDED IN FUNCTIONS.PHP -->

    <?php
    // ABOUT AUBREY MODAL
    create_modal(
      'AboutAubrey',
      'Meet Aubrey',
      '<img class="pull-right" height="200" src="http://sweetclipart.com/multisite/sweetclipart/files/little_girl_hispanic_or_middle_eastern_3.png">
          
          <p>Eleven-year-old Aubrey has lived in Santa Barbara, California for the past five years. Her mom and dad just sold their house and car, and Aubrey and her brother Everest have left the school that Aubrey has attended since she was in kindergarten. Now they are on an amazing adventure together traveling the world!</p>

          <p>Aubrey enjoys volleyball, swimming, and acting. She loves to eat Mexican food. Her favorite band is The Beatles, and her favorite color is green.</p>

          <h3>Where is Aubrey going next?</h3>

          <ul>
            <li><b>November:</b> India, Nepal, and Sri Lanka</li>
            <li><b>December:</b> Sri Lanka and U.S.A.</li>
            <li><b>January:</b> U.S.A. and South America</li>
            <li><b>February:</b> South America</li>
          </ul>

          <p><small>Adapted from <a target="_blank" href="http://kidsblogs.nationalgeographic.com/blog/passport-to-roam/">National Geographic Kids</a></small></p>

          <p><i>Information will typically be collected from kids living in underrepresented countries but, for the purpose of this prototype, we&apos;ve used previously published stories from National Geographic Kids.</i></p> 
      '
    );

    // NATIONAL PARK POPUP
    create_modal(
      'NatPark',
      'About Ranthambore National Park',
      '<p>Ranthambore National Park is one of the biggest and most reknowned national parks in Northern India. The park is located in the Sawai Madhopur district of southeastern Rajasthan, which is about 130 km (~81 mi) from Jaipur. One of the most famous former hunting grounds of the Maharajas of Jaipur, the Ranthambore National Park terrain is a major wildlife tourist attraction spot that has attracted many wildlife lovers and photographers.</p>
       <p><small>Adapted from <a href="http://www.ranthamborenationalpark.com">www.ranthamborenationalpark.com</a></small></p>'
    );

    // ASK AUBREY
    ask('Aubrey');
    ?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.scrolldepth.min.js"></script>

    <script>
    $('#map').one("click",change_bg);

    </script>
    <script src="js/lightbox-2.6.min.js"></script>
  </body>
</html>