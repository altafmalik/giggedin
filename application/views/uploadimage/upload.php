<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP, MySQL and jQuery Photo Tagging</title>

	<!-- A simple css reset from yahoo -->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/reset/reset-min.css" />

  <!-- Styles for tagging  -->
	<link rel="stylesheet" href="<?php echo url::base() ?>css/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	
	<!-- Styles for the jquery plugin from http://odyniec.net/projects/imgareaselect/ not supported by neillh.com.au -->
	<link rel="stylesheet" type="text/css" href="<?php echo url::base() ?>css/imgareaselect-animated.css" /> 

  <!-- Include jquery via google apis -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>


	<script type="text/javascript" src="<?php echo url::base() ?>js/jquery.imgareaselect.pack.js"></script>
	
	<!-- Phototagging Load js -->
	<script type="text/javascript" src="<?php echo url::base() ?>js/jquery.load.js"></script>

  
  <?php echo $tags_styles; ?>
</head>
<body>
  <div id="site">
    
   

    <!-- Can do this much simplier in jquery now #TODO -->
    <div class="on-off">
      <div class="start-tagging">Click here to start tagging</div>
      <div class="finish-tagging hide">Click here to cancel tagging</div>
    </div>

    <div class="image">
      <div id="title_container" class="hide">
      	<form method="post" action="<?php echo url::base() ?>uploadimage/addtag">
      		<!-- Grab the X/Y/Width/Height we dont need x2 & y2, but will capture them anyway -->
      		<fieldset>
        		<input type="hidden" name="x1" id="x1" value="" />
        		<input type="hidden" name="y1" id="y1" value="" />
        		<input type="hidden" name="x2" id="x2" value="" />
        		<input type="hidden" name="y2" id="y2" value="" />
        		<input type="hidden" name="w" id="w" value="" />
        		<input type="hidden" name="h" id="h" value="" />
        		<label for="title">Tag text</label><br />
        		<input type="text" id="comment" name="comment" size="30" value="" maxlength="55" /><br />
        		<input type="hidden" name="tag" value="true" />
        		<input type="submit" value="Submit" class="" />
          </fieldset>
      	</form>
      </div>
      <img src="<?php echo url::base() ?>images/altaf.jpg" border="0" id="imageid" alt="cat running" />

      <!-- The UL can be moved into the function if wanted -->
    	<ul class="map">
        <?php echo $tags_map; ?>
    	</ul>
    </div>
   <a href='/uploadimage'>Change Image</a>
   <br><br>

    <h2 class="tagtitles">In this photo: </h2>
    <!-- The UL can be moved into the function if wanted -->
    <ul id="titles">
      <?php echo $tags_list ?>
    </ul>

  </div>
</body>
</html>