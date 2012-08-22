<link href="menu/assets/css/libs/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
padding-top: 60px;
padding-bottom: 40px;
}
</style>
<link href="menu/assets/css/libs/bootstrap-responsive.css" rel="stylesheet">
<div class="nav-collapse">
<ul class="nav">
<?php
	foreach($aMenuData as $key=>$val){
		echo '<li></i><a href="'.$val['tm_link'].'" >'.$val['tm_name'].'</a></li>';
	}
?>
</ul>
</div><!--/.nav-collapse -->

<script  src="menu/assets/js/apps/menu.js" type="text/javascript"></script>
		