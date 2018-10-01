<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TopVlogger</title>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>recursos/img/ico/kusanag.png" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>recursos/css/basico.css">
	<script src="<?php echo base_url(); ?>recursos/js/basico.js"></script>
</head>
<body> 
	<div class="contenedor">
		<header class="centrar"> 
			 <div class="companyLogo">
			 	<img src="<?php echo base_url(); ?>recursos/img/rankMedal/rank_number.png" alt="">
			 </div>
			 <div class="companyName">TopVlogger</div>
		</header>
		<body>
			<input id="search" autocapitalize="none" autocomplete="off" autocorrect="off" name="search_query" tabindex="0" spellcheck="false" placeholder="Buscar" aria-label="Buscar" aria-haspopup="false" role="combobox" aria-autocomplete="list" dir="ltr" style="outline: currentcolor none medium;" class="ytd-searchbox" type="text">
		</body>
	</div>
</body>
</html>