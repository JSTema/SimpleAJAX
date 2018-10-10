<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Test</title>
	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
	<style>
		body{
			margin-left: 80px;
			margin-top: 30px;
			margin-right: 80px;
		}
	</style>
</head>
<body>
	
	<p id="load" style="cursor: pointer;">Загрузить данные из content.php не перезагружая страницу</p>
	<div id="information"></div>

	<hr>
	<input type="text" name="name" id="name">
	<br><br>
	<input type="button" id="send" class="btn btn-info" value="Send">
	<div id="out"></div>

	<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js" defer></script>
	<script type="text/javascript" src="index.js" defer></script>
	<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>