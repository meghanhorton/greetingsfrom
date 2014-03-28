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
    <?php $title = '...'; include('includes/nav.php'); ?>
    <!-- NAVIGATION ENDS -->

    <!-- BEGIN MAP -->
    <div id="map" class="hidden-phone hidden-sm hidden-xs" style='text-align: center;'>
      <embed src="images/map.svg" type="image/svg+xml" />
    </div>

    <div id="alternative_list" class="visible-phone visible-sm visible-xs">
      <h3>Postcards</h3>
      <ul>
        <li><a href="congo">Democratic Republic of Congo</a></li>
        <li><a href="india">India</a></li>
        <li><a href="dc">Washington, D.C.</a></li>
        <li><a href="nepal">Nepal</a></li>
      </ul>
    </div>
    <!-- END MAP -->


    <!-- BEGIN MODAL -->
    <div class="modal fade" id="instructions">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Prototype testing</h4>
          </div>
        <div class="modal-body">
          <p>Click on pins to return to postcards you’ve received in the past. Because subscribers would receive new postcards every couple of weeks, the number of pins would constantly be growing. </p>
          <p>*For the purposes of this prototype, it will appear as if the postcard from India is the fourth you have received.</p>
          <hr/>
          <p>We are testing the feasibility of a news product that would distribute stories and visuals generated by kids from kids around the world in the form of a digital postcard.</p> 
          <p>The content of these postcards would be collected by non-governmental organizations working in proximity to the children and then packaged&mdash;along with photos, video, audio or other multimedia&mdash;into a postcard and emailed to classrooms, subscribers and families across the globe.</p>
          <p>Subscribers would receive 2-3 postcards per month, touching on everything from international news, to cultural events, to everyday activities in underrepresented geographic areas.</p>
          <p><b>Notice: By navigating this site, you are agreeing that Reese News Lab may use data about your interactions in its study. No personal information will be collected from this site.</b></p>
          <p><b>To start, please click "I consent" and click on a marker.</b></p>
          <p><b>Please consider participating in a brief <a href="https://docs.google.com/forms/d/1i1UfqCbJ7C8asm6lHQevYI0tpg5s9zSf3OX-9hdp3gY/viewform">survey</a> after you've viewed the prototype.</b></p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">I consent</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!-- END MODAL -->

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
    $('#instructions').modal('show');
    </script>
  </body>
</html>