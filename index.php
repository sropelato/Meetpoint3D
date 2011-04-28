<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Meetpoint 3D</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<link type="text/css" rel="stylesheet" href="css/style1.css"/>
		<script type="text/javascript" src="js/jquery-1.5.js"></script>
		<script type="text/javascript" src="js/jquery-url.js"></script>
		<script type="text/javascript" src="js/webgl-utils.js"></script>
		<script type="text/javascript" src="js/glMatrix-0.9.5.min.js"></script>
		<script type="text/javascript" src="js/mp3d/ResourceManager.js"></script>
		<script type="text/javascript" src="js/mp3d/Mp3D.js"></script>
		<script type="text/javascript" src="js/mp3d/Node.js"></script>
		<script type="text/javascript" src="js/mp3d/Model.js"></script>
		<script type="text/javascript" src="js/mp3d/World.js"></script>
		<script type="text/javascript" src="js/mp3d/Light.js"></script>
		<script type="text/javascript" src="js/mp3d/MojitoLoader.js"></script>
		<script type="text/javascript" src="js/mp3d/SimpleTextureMaterial.js"></script>
		<script type="text/javascript" src="js/mp3d/script1.js"></script>
	</head>
	<body>
		<div id="header"></div>
		<div id="body">
			<div id="navigation">
				<a href="index.php?content=project">The Project</a>
				&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="index.php?content=blog">Blog</a>
				&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="index.php?content=play">Play</a>
				&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="index.php?content=help">Help</a>
			</div>
			<div id="content">
				<?php
					switch($_GET["content"])
					{
						case "":
							include("project.php");
							break;
						case "project":
							include("project.php");
							break;
						case "blog":
							include("blog.php");
							break;
						case "play":
							include("play.php");
							break;
						case "help":
							include("help.php");
							break;
						default:
							$error_text = "The page you're looking for does not exist.";
							include("error.php");
					}
				?>
			</div>
		</div>
		<div id="foot"></div>
	</body>
</html>
