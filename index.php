<?
  $scale = 1;
  if(isset($_GET['scale']))
    $scale = $_GET['scale'];

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iPhone embed</title>
	<style type="text/css">
		div{ width: 100%; position: relative;  }
		div img{ width: 100%; }
		iframe{ border: none; position: absolute;top: 14.3%;left: 7.1%;width: <?=(1/$scale)*86.9?>%;height: <?=(1/$scale)*71.4?>%;
			transform-origin: 0 0; -ms-transform-origin: 0 0; -webkit-transform-origin: 0 0;
			transform: scale(<?=$scale?>); -ms-transform: scale(<?=$scale?>); -webkit-transform: scale(<?=$scale?>);
		}
	</style>
</head>
<body>
	<div>
		<img src="./iphone4_white.png">
		<iframe src="<?=$_GET['url']?>"></iframe>
	</div>
</body>
</html>
