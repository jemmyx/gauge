<?php
$timer = (object)array(
	// 'startdate' => '03/05/2018 11:59:59 PM',
	// 'expdate' => '03/30/2018 11:59:59 AM',
	'startdate' => strftime('%m/01/%Y 11:59:59 PM'),
	'expdate' => strftime('%m/%d/%Y 11:59:59 AM', strtotime('+2 weeks')),
);
// var_dump($timer);exit;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Lab - Gauge</title>
	<meta name="description" content="A simple standard gauge implementation">
	<link rel="stylesheet" href="asset/css/styles.css">
	<script>
		var lang = 'en';
		var objTimer = JSON.parse('<?php print addslashes(json_encode($timer));?>');
		console.log(objTimer);
	</script>
	<meta name="author" content="Fabio Meyer">
</head>
<body>
	<div class="container">
		<h1>Simple time-based gauge implementation</h1>
		<div>
			<p>Start date : <?php print $timer->startdate;?></p>
			<p>End date : <?php print $timer->expdate;?></p>
		</div>
		<div id="bloc-progressbar">
			<span id="countdown"></span>
			<div id="progressbar"></div>
		</div>
	</div>
	<script src="public/components/tether/dist/js/tether.min.js"></script>
	<script type="text/javascript" src="public/components/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" href="public/components/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="public/components/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>