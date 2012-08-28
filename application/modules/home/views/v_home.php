<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Devroel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="home/assets/css/libs/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="home/assets/css/libs/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	
	<script  src="home/assets/js/libs/jquery.js" type="text/javascript"></script>
	
  </head>

  <body>
		<div class="navbar navbar-fixed-top">
		  <div class="navbar-inner">
			<div class="container">
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </a>
			  <a class="brand" href="#"><?php echo $sProject_name;?></a>
			  
			  <div class="nav-collapse">
				<ul class="nav">
				<?php
					foreach($aMenuData as $key=>$val){
						echo '<li id="page_id_'.$key.'"></i><a href="javascript: Home.page('.$key.');" >'.$val['tm_name'].'</a></li>';
					}
				?>
				</ul>
			  </div><!--/.nav-collapse -->
			  
			</div>
		  </div>
		</div>

		<div class="container">
			<div id="myCarousel" class="carousel slide">
	  <!-- Carousel items -->
				  <div class="carousel-inner">
				  <?php
					foreach($aMenuData as $key=>$val){?>
					
					<div class="<?php echo($key == 0)?"active":"";?> item">
					
						<div class="hero-unit" style="height:500px">
							<h1><?php echo ucwords($val['tm_name']);?></h1>
							<p><?php echo Modules::run($val['tm_name']);?></p>
						</div>

					</div>
					<?php }?>
					
					
					
				  </div>
			  <!-- Carousel nav 
			  <a class="carousel-control left" href="#" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#" data-slide="next">&rsaquo;</a>-->
			</div>
			 <!-- Main hero unit for a primary marketing message or call to action
		  <div class="hero-unit">
			<h1>Hello, world!</h1>
			<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
			<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		  </div>

		  <!-- Example row of columns --
		  <div class="row">
			<div class="span4">
			  <h2>Heading</h2>
			  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			  <p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
			<div class="span4">
			  <h2>Heading</h2>
			  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			  <p><a class="btn" href="#">View details &raquo;</a></p>
		   </div>
			<div class="span4">
			  <h2>Heading</h2>
			  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			  <p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
		  </div> -->

		</div>
		<footer id="footer">
		<div class="container">
		<hr />
			<div class="row">
			<div class="span4">
			  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			  
			</div>
			<div class="span4">
			  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			 
		   </div>
			<div class="span4">
			  <p><a class="btn btn-primary btn-large">Download My Resume &raquo;</a></p>
			</div>
		  </div>
		</div>
		</footer>
		
		<script  src="home/assets/js/libs/bootstrap.js" type="text/javascript"></script>
		<script  src="home/assets/js/apps/custom.js" type="text/javascript"></script>
		
		
	</body>
	
	

