<nav id="navtop" class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-header">
	<h1 class="pull-left"><a href="/">Greetings from</a><span class="grey"><?php echo $title;?></span></h1>
	
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
	  <span class="sr-only">Other Maps</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	</div>

	  <div class="slide-right collapse navbar-collapse" id="navigation">
		  <ul class="nav navbar-nav">
		  	<li><a href="" class="no-pad" onClick="_gaq.push(['_trackEvent', 'Share', 'Twitter']);" data-toggle="modal" data-target="#share"><i class="fa fa-twitter fa-2x"></i></a></li>
		  	<li><a href="" class="no-pad" onClick="_gaq.push(['_trackEvent', 'Share', 'Facebook']);" data-toggle="modal" data-target="#share"><i class="fa fa-facebook fa-2x"></i></a></li>
		  	<li><a href="" class="no-pad" onClick="_gaq.push(['_trackEvent', 'Share', 'Email']);" data-toggle="modal" data-target="#share"><i class="fa fa-envelope-o fa-2x"></i></a></li>
		  	<li><a class="no-pad" style="font-size: 40px; font-weight: 100; color: #ccc">|</a></li>
		  	<li><a href="" class="no-pad" style="font-size: 20px; font-weight: bold" onClick="_gaq.push(['_trackEvent', 'Help', 'Help']);" data-toggle="modal" data-target="#help">?</a></li>
		  	<li><a class="no-pad" style="font-size: 40px; font-weight: 100; color: #ccc">|</a></li>
		  	<li><a target="_blank" href="https://docs.google.com/forms/d/1i1UfqCbJ7C8asm6lHQevYI0tpg5s9zSf3OX-9hdp3gY/viewform" onClick="_gaq.push(['_trackEvent', 'Survey', 'Survey']);">Survey</a></li>
		  	<li><a class="no-pad" style="font-size: 40px; font-weight: 100; color: #ccc">|</a></li>
		  	<li class="dropdown">
		  		<a href="#" onClick="_gaq.push(['_trackEvent', 'Navigation', 'Dropdown']);"  class="dropdown-toggle" data-toggle="dropdown">Other postcards <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a onClick="_gaq.push(['_trackEvent', 'Navigation', 'India']);" href="india">India *</a></li>
		          <li><a onClick="_gaq.push(['_trackEvent', 'Navigation', 'Congo']);" href="congo">Congo</a></li>
		          <li><a onClick="_gaq.push(['_trackEvent', 'Navigation', 'Nepal']);" href="nepal">Nepal</a></li>
		          <li><a onClick="_gaq.push(['_trackEvent', 'Navigation', 'Washington, D.C.']);" href="dc">Washington, D.C.</a></li>
		          <li><a onClick="_gaq.push(['_trackEvent', 'Navigation', 'Full Map']);" href="index"><b>Full Map</b></a></li>
		          <li style="text-align: right;"><small>*Original Example</small></li>
		        </ul>
		  	</li>
		  </ul>
		</div>
</nav>

<?php
create_modal(
	'share',
	'Share buttons',
	'<p>Love this postcard? You can share it with up to three other people. A teacher and his or her classroom count as one share!
	Use the buttons to share this via email, Facebook message or direct message on Twitter. Your friends will be given a special code giving them access to this postcard.
	</p>
	<p>Note: This is just a preview of how this feature would work. It isn’t functional yet. Thanks for your patience!
	</p>'
);

create_modal(
	'help',
	'Help',
	'<ul>
		<li>
			<h5>How do I navigate?</h5>
			From the <a href="/">homepage</a>, you may navigate using the dots located on the map. You may also choose from a list of available postcards in the upper right menu.
		</li>
		<li>
			<h5>Why do most pieces of content include "Adapted from..."?</h5>
			For the purposes of this prototype, we have organized information compiled from various sources, written by children, as placeholders to test our ideas. If a finished product were to be built, the postcard content would be provided by NGOs (Non-governmental organizations) containing information written by children in their region.
		</li>
		<li>
			<h5>Why are some pieces of text highlighted?</h5>
			Items <span class="hint">highlighted</span> as a hint provide further information about their contained content. This content can include biographies, relevant information to a city, language translation, audio or video and other relevant information to the postcards.
		</li>
		<li>
			<h5>What does "Ask ____" do?</h5>
			As a part of our prototype, our "Ask _______" buttons do not currently supply questions to the writer. In a finished product, you would likely have the option to ask questions of the writers and receive responses.
		</li>
		<li>
			<h5>I noticed a technical problem, how do I report it?</h5>
			Since this is a prototype and not a finished product, we recognize that this site may contain technical issues. In a final product, rigorous testing would be performed to ensure the utmost user-friendly experience. If you have suggestions about the prototype, please note these in your survey or contact <a href="mailto:greetings@reesenewslab.org">greetings@reesenewslab.org</a>.
		</li>
		<li>
			<h5>How do I participate in the survey?</h5>
			<a href="">Click here</a> to participate in the survey to provide feedback about our prototype.
		</li>

	</ul>'
	);


?>