<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Auto-scroll</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable, #draggable2, #draggable3,#draggable4,#draggable5,#draggable6,#draggable7,#draggable8,#draggable9 { width: 200px; height: 80px; padding: 0.5em; float: left; border:none; }
 
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable({ scroll: true });
    $( "#draggable2" ).draggable({ scroll: true, scrollSensitivity: 100 });
    $( "#draggable3" ).draggable({ scroll: true, scrollSpeed: 100 });
	
	$( "#draggable4" ).draggable({ scroll: true, scrollSpeed: 100 });
	$( "#draggable5" ).draggable({ scroll: true, scrollSpeed: 100 });
	$( "#draggable6" ).draggable({ scroll: true, scrollSpeed: 100 });
	$( "#draggable7" ).draggable({ scroll: true, scrollSpeed: 100 });
	$( "#draggable8" ).draggable({ scroll: true, scrollSpeed: 100 });
	$( "#draggable9" ).draggable({ scroll: true, scrollSpeed: 100 });
  });
  </script>
</head>
<body>
 
<div id="draggable" class="ui-widget-content" >
  <img src="images/armario.jpg" width="177px" height="141px" >
</div>
 
<div id="draggable2" class="ui-widget-content">
  <img src="images/chimenea.jpg" width="177px" height="141px">
</div>
 
<div id="draggable3" class="ui-widget-content">
  <img src="images/descanso.jpg" width="177px" height="141px">
</div>

<div id="draggable4" class="ui-widget-content">
  <img src="images/juego.jpg" width="177px" height="141px">
</div>

<div id="draggable5" class="ui-widget-content">
 <img src="images/mesa.jpg" width="177px" height="141px">
</div>
<div id="draggable6" class="ui-widget-content">
  <img src="images/sillon.jpg" width="177px" height="141px">
</div>
<div id="draggable7" class="ui-widget-content">
  <img src="images/silloncla.jpg" width="177px" height="141px">
</div>
 <div id="draggable8" class="ui-widget-content">
  <img src="images/sillonin.jpg" width="177px" height="141px">
</div>
 <div id="draggable9" class="ui-widget-content">
  <img src="images/sillonp.jpg" width="177px" height="141px">
</div>
<div style="height: auto; width: 1px;"></div>
 
 <?php
$foo_x=$_POST['foo_x'];
$foo_y=$_POST['foo_y'];
echo "X=$foo_x, Y=$foo_y";
?>
<form action='' method=post>
<!--<input type="image" alt=' Finding coordinates of an image' src="images/xy-coordinates.jpg" name="foo" style="cursor:crosshair";/>-->
</form>
 
</body>
</html>