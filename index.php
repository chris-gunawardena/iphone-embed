<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iPhone embed</title>
	<style type="text/css">
		div{ width: 100%; position: relative;  }
		div img{ width: 100%; }
		iframe{ border: none; position: absolute;top: 14.3%;left: 7.1%;width: 86.9%;height: 71.4%;}
	</style>
</head>
<body>
	<div>
		<img src="./iphone4_white.png">
		<iframe src="<?=$_GET['url']?>"></iframe>
	</div>
</body>
</html>