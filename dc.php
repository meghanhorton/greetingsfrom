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
    <?php $title = ' Washington, D.C.'; include('includes/nav.php'); ?>
    <!-- NAVIGATION ENDS -->

    <!-- BEGIN MAP -->
    <div onClick="_gaq.push(['_trackEvent', 'Clicked on map', 'DC']);" id="map" style='text-align: center;'>
      <img src="images/dc_map.png">
    </div>
    <!-- END MAP -->

    <div class="container">
      <div id="postcard" class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="postcard stamp-dc">
            <div class="row">
              <div class="letter col-sm-7 col-xs-12">
                <!-- BEGIN MAIN TEXT ON POSTCARD -->
                <p>On a cold morning on Monday, January 21st, I joined the audience gathered outside the <a class="hint" onClick="_gaq.push(['_trackEvent', 'Video', 'U.S. Capitol']);" target="_blank" href="https://www.youtube.com/watch_popup?v=as5J-RUTW3w">U.S. Capitol</a>, in Washington, D.C., to celebrate the American tradition of a <span class="hint" onClick="_gaq.push(['_trackEvent', 'Modal', 'Inauguration']);" data-toggle="modal" data-target="#Inauguration">Presidential Inauguration</span>. 
                  The Inauguration is where the President and Vice President pledge to serve our country freely and willingly, and where one term of a President ends, and a new one begins. As my excitement and enthusiasm grew, so did the number of people. 
                  Crowds larger than I'd ever seen came early to find seats or a place to stand.
                  The crowd erupted in cheers after Chief Justice John Roberts administered the oath of office to President Obama for his second term. For his Inaugural address, the President gave a speech about freedom and equality, and our responsibility to carry out those values. 
                  "While freedom is a gift from God, it must be secured by his people here on Earth," he said.</p>

                <!-- BEGIN SIGNATURE -->
                <p class="signature"><span class="hint" onClick="_gaq.push(['_trackEvent', 'Modal', 'About Bridget']);" data-toggle="modal" data-target="#AboutBridget">Bridget</a></p>

                <!-- ADAPTATION -->
                <p class="sponsor">Adapted from <i>Time for Kids</i></p>
              </div>

              <!-- ADDRESS, ON RIGHT -->
              <div class="address col-sm-5 hidden-xs">
                <p>Bridget</p>
                <p>Washington, D.C.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div id="ask" onClick="_gaq.push(['_trackEvent', 'Modal', 'Ask Bridget']);" data-toggle="modal" data-target="#AskBridget">
      Ask Bridget
    </div>




    <!-- POPUPS -->
    <?php 
    create_modal(
      'Inauguration',
      'Presidential Inauguration',
      '<h3>Why January 21?</h3>
          <p>The <a target="_blank" href="http://www.archives.gov/exhibits/charters/constitution_amendments_11-27.html">20th Amendment</a> to the Constitution, which changed the beginning of a Presidential term from March 4 to January 20, was ratified in 1933, and took effect for President Franklin D. Roosevelt’s second term in 1937.</p>

          <h3>When Inauguration Day falls on Sunday</h3>
          <p>Only six times in the nation\'s history has the constitutionally-mandated date for a Presidential Inauguration fallen on a Sunday.
          January 20, 2013 was the seventh time, and following historical precedent, the public ceremony was held at the U.S. Capitol on Monday, January 21, 2013. 
          In a tradition that dates back to 1917, the White House arranged a private swearing in before noon on January 20, 2013.</p>

          <p><i>Information provided by <a target="_blank" href="http://www.inaugural.senate.gov/about/jan-21">the Joint Congressional Committee on Inaugural Ceremonies</a></i></p> '
    );

    create_modal(
      'AboutBridget',
      'Meet Bridget',
      '<p>Bridget Bernardo is an 11-year-old from Wakefield, RI. Her favorite things to do are read and go to the beach, and her most prized possession is her lacrosse stick. 
            She loves Finding Nemo and Taylor Swift and hopes that one day she will be able to interview Sandra Day O’Connor.</p>
          <ul>
            <li><b>Favorite things to do in free time:</b> Read and go to the beach</li>
            <li><b>Five things I can\'t live without:</b> My family, faith, friends, my glasses and my MacBook computer</b>
            <li><b>My dream assignment or interview:</b> Sandra Day O’Connor</li>
            <li><b>My most prized possession:</b> My lacrosse stick</li>
            <li><b>My proudest accomplishment:</b> Being selected a TFK Kid Reporter</li>
            <li><b>Who I look up to:</b> My parents and grandparents</li>
            <li><b>The last book I read:</b> Number the Stars, by Lois Lowry</li>
            <li><b>My favorite movie is:</b> Finding Nemo</li>
            <li><b>My favorite musical group:</b> Taylor Swift</li>
            <li><b>My pet peeve:</b> Mean-spirited and bossy people</li>
            <li><b>One thing hardly anyone knows about me:</b> I have a 99-year-old great-grandmother I call Super Nana.</li>
            <li><b>Career goal:</b> To become an eye doctor or a journalist</li>
          </ul>

          <p><small>Adapted from <a target="_blank" href="http://www.timeforkids.com/news/president-obamas-second-inauguration/74791">Time for Kids</a></small></p>

          <p><i>Information will typically be collected from child writers but, for the purpose of this prototype, we\'ve used previously published stories from Time for Kids.</i></p> 
        '
    );

    ask('Bridget');

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