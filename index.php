<?php
$timer = (object)array(
	'startdate' => '03/05/2018 11:59:59 PM',
	'expdate' => '03/30/2018 11:59:59 AM',
);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lab - Gauge</title>
	<meta name="description" content="A simple standard gauge implementation">
	<link rel="stylesheet" href="asset/css/styles.css">
	<script>
		var lang = 'en';
		var expdate = '<?php print $timer->expdate;?>';
		var startdate = '<?php print $timer->startdate;?>';
	</script>
	<meta name="author" content="Fabio Meyer">
</head>
<body>
	<div id="bloc-progressbar">
		<span id="countdown"></span>
		<div id="progressbar"></div>
	</div>
	<script type="text/javascript" src="public/components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>