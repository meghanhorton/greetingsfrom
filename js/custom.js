// CHANGE BACKGROUND
function change_bg(){
  $( 'html, body' ).animate( { scrollTop: 0 }, 1000 );
    var i = 1;
    var interval = setInterval(function(){
      $('#map img').attr('src','images/Path/map0'+ i +'.png');
      i++;
      if(i === 6){clearInterval(interval)};
    },750);

    var pc_top = $('#postcard').offset().top;
    setTimeout(function(){
      $( 'html, body' ).animate( { scrollTop: pc_top }, 2000 );
    },3750);
}

function set_postcard(){
  var height    = $(window).height();
  var padding   = height * .05;

  $('#postcard').height(height - padding).css('padding-top',padding);

  // SET HEIGHT OF ACTUAL POSTCARD
  var postcard_width = $('.postcard').width();
  $('.postcard').height(postcard_width*.667);
}

function scroll_to_postcard(){
  var pc_top = $('#postcard').offset().top;
  $( 'html, body' ).animate( { scrollTop: pc_top }, 2000 );
}

function make_active(){
  var filename = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
    
  $('a[href$="'+filename+'"]').parent().addClass('active');
}





$(window).ready(set_postcard).ready(make_active);
$(window).resize(set_postcard);