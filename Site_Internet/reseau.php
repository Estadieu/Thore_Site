<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		a img{ 
			width: 25%;
			height: 20em;
		}
	</style>

<link rel="stylesheet" href="styles.css">
<?php include 'inclure/head.php'; ?>
</head>
<body>
	<?php include 'inclure/navbar.php'; ?>
    	<div id="instafeed-container"></div>



	<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
	<script type="text/javascript">
	var userFeed = new Instafeed({
		get: 'user',
		target: "instafeed-container",
    	resolution: 'low_resolution',
		accessToken: 'IGQVJXaV9TRDdUZAnZA6cTR3UGMtN3FyNHVxLXJ4dFR5MzdvUzUwdkszLUtaR0I5QnBXNmZAWczdqVVQtMWdxMXhDbGJ2RlQtdGxqZAE9NcDlWS01Ka2NjOGh4MWM3MV9HVERTc2djM0NlUjRldm15MGt1OQZDZD'
	});
	userFeed.run();
	</script>
</body>
</html>