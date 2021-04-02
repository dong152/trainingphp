<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

		$course = array("agular "=>128, "laravel: "=>162, "php"=>157, "jquery"=>192, "vuejs"=>72, "react"=>233, "zendframework"=>24, "cmswordpress"=>62, "cmssugar"=>78 );
	 	function max_course($course)
	 	{
	 		$max_value = "";
	 		$max_time=0;
	 		foreach ($course as $key => $value) {
	 			if($course[$key]>$max_time)
	 			{
	 				$max_value = $key;
	 				$max_time = $course[$key];
	 			}
	 		}
	 		return  array("$max_value", "$max_time");
	 	}
	 	echo (ucwords(max_course($course)[0])." - ".max_course($course)[1])."giờ";
	?>
</body>
</html>