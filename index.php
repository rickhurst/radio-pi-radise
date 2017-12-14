<?php

if (isset($_GET['action'])){
	$action = $_GET['action'];
	switch($action){
		case "play":
			$output = shell_exec('mpc play');
		break;
		
		case "stop":
			$output = shell_exec('mpc stop');
		break;
		case "toggle":
			$output = shell_exec('mpc toggle');
		break;
	}

} else {
	$output = shell_exec('mpc status');
}
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
body {
  background: black;
  color: green;
  font-family: 'VT323', monospace;
  font-size: 22px;
}

.button {
  display: block;
  border: 1px solid orange;
  font-size: 50px;
  padding: 20px;
  text-decoration: none;
  color: orange;
  margin: 20px;
}
</style>
<title>Radio Pi-radise</title>
</head>
<body>
<?php echo $output; ?>
<hr>
<a class="button" href="/?action=play">play</a>
<a class="button" href="/?action=stop">stop</a>
</body>
</html>

