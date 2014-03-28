<?php
// FUNCTIONS

function create_modal($id,$title,$content){
	$modal = '
	<!-- BEGIN '.$title.'-->
	  <div id="'.$id.'" class="modal fade">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-body" style="min-height: 250px;">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title">'.$title.'</h4>
	          '.$content.'
	        </div>
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
	<!-- END '.$title.'-->

	';

	echo $modal;
}

function ask($name){
	create_modal(
		'Ask'.$name,
		'Ask '.$name,
		'
		<p>Our postcards are conversation starters: between teacher and class, subscriber and friends, parent and child, even writer and readers. If you’d like the writer of this postcard to be a part of the discussion, send him or her a note. Our writers will try their best to respond to as many of your questions and comments as possible.</p>
		<p>Whether or not they get back to you, know that your response means a lot to them. Thanks! </p>
		<p>Note: Since our prototype uses excerpts from a previously published news source, this form is not yet functional. Thanks for understanding! In the real product, we would work with the NGOs to make sure the kids get the questions and try to respond.</p>
		<form role="form">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="name" class="form-control" id="name" placeholder="Student\'s Name">
            </div>

            <div class="form-group">
              <label for="class">Class</label>
              <input type="name" class="form-control" id="class" placeholder="Teacher\'s Name">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Teacher\'s Email">
            </div>

            <div class="form-group">
              <label for="question">Question</label>
              <textarea class="form-control" id="question"></textarea>
            </div>
            

            <button onClick="_gaq.push([\'_trackEvent\', \'Ask a question\', \'Submitted\']);" type="submit" class="btn btn-default">Submit</button>
          </form>
		'
	);
}




?>