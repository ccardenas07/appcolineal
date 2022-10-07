<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AppColineal</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'> </script> 
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js1/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<!-- inicio script--->
<script>
$(function() {
// there's the gallery and the trash
var $gallery = $( "#gallery" ),
$trash = $( "#trash" );
// let the gallery items be draggable
$( "li", $gallery ).draggable({
cancel: "a.ui-icon", // clicking an icon won't initiate dragging
revert: "invalid", // when not dropped, the item will revert back to its initial position
containment: "document",
helper: "clone",
cursor: "move"
});
// let the trash be droppable, accepting the gallery items
$trash.droppable({
accept: "#gallery > li",
activeClass: "ui-state-highlight",
drop: function( event, ui ) {
deleteImage( ui.draggable );
}
});
// let the gallery be droppable as well, accepting items from the trash
$gallery.droppable({
accept: "#trash li",
activeClass: "custom-state-active",
drop: function( event, ui ) {
recycleImage( ui.draggable );
}
});
// image deletion function
/*var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
function deleteImage( $item ) {
$item.fadeOut(function() {
var $list = $( "ul", $trash ).length ?
$( "ul", $trash ) :
$( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );
$item.find( "a.ui-icon-trash" ).remove();
$item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
$item
.animate({ width: "48px" })
.find( "img" )
.animate({ height: "36px" });
});
});
}
// image recycle function
/*var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
function recycleImage( $item ) {
$item.fadeOut(function() {
$item
.find( "a.ui-icon-refresh" )
.remove()
.end()
.css( "width", "96px")
.append( trash_icon )
.find( "img" )
.css( "height", "72px" )
.end()
.appendTo( $gallery )
.fadeIn();
});
}*/
// image preview function, demonstrating the ui.dialog used as a modal window
/*ultimo cambio*/
/*function viewLargerImage( $link ) {
var src = $link.attr( "href" ),
title = $link.siblings( "img" ).attr( "alt" ),
$modal = $( "img[src$='" + src + "']" );
if ( $modal.length ) {
$modal.dialog( "open" );
} else {
var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
.attr( "src", src ).appendTo( "body" );
setTimeout(function() {
img.dialog({
title: title,
width: 400,
modal: true
});
}, 1 );
}
}*/
// resolve the icons behavior with event delegation
$( "ul.gallery > li" ).click(function( event ) {
var $item = $( this ),
$target = $( event.target );
if ( $target.is( "a.ui-icon-trash" ) ) {
deleteImage( $item );
} else if ( $target.is( "a.ui-icon-zoomin" ) ) {
viewLargerImage( $target );
} else if ( $target.is( "a.ui-icon-refresh" ) ) {
recycleImage( $item );
}
return false;
});
});
</script>

<!--boton like-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=800153036666491";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--fin-->
<!----final script---->
</head>
<body>
<div class="appli">

<div class="ui-widget ui-helper-clearfix">

<div class="muebles">
<ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
<li class="ui-widget-content ui-corner-tr">
<!--<h5 class="ui-widget-header">High Tatras</h5>-->
<img src="images/armario.jpg" alt="The peaks of High Tatras" width="200px" height="80px">
</li>
<li class="ui-widget-content ui-corner-tr">
<!--<h5 class="ui-widget-header">High Tatras 2</h5>-->
<img src="images/chimenea.jpg" alt="The chalet at the Green mountain lake" width="200px" height="80px">
</li>
<li class="ui-widget-content ui-corner-tr">
<!--<h5 class="ui-widget-header">High Tatras 2</h5>-->
<img src="images/descanso.jpg" alt="The chalet at the Green mountain lake" width="200px" height="80px">
</li>
<li class="ui-widget-content ui-corner-tr">
<!--<h5 class="ui-widget-header">High Tatras 2</h5>-->
<img src="images/juego.jpg" alt="The chalet at the Green mountain lake" width="200px" height="80px">
</li>
<li class="ui-widget-content ui-corner-tr">
<!--<h5 class="ui-widget-header">High Tatras 2</h5>-->
<img src="images/mesa.jpg" alt="The chalet at the Green mountain lake" width="200px" height="80px">
</li>
</ul>
</div><!---fin div muebles--->

<div class="arbolito">
<div id="trash" class="ui-widget-content ui-state-default">
</div>
</div><!--fin div arbolito-->

</div>

</div><!--fin div appli-->
<!--boton like-->
<div class="me_gusta">
<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="100" data-layout="box_count" data-action="like" ></div>
</div>
<!--fin-->
<!--inicio twitter-->
<div class="twitter">
<a href="https://twitter.com/share" class="twitter-share-button" data-related="jasoncosta" data-lang="en" data-size="large" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<!--fin-->
</body>
</html>