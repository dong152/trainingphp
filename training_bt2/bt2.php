<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

	$list = array(24,23,24,121,221,12,12,12,23,34,65);
	$list2= array(24, 23, 24, 121, 221, 12, 12, 12, 23, 34, 65); // explode 
	// preg_replace
	 	function times_task($list, $name)
	 	{
	 		$times = 0;
	 		foreach ($list as $key => $value) {
	 			if ($list[$key]=== $name) 
	 				$times++;
	 		}
	 		return $times;

	 	}
	 	echo times_task($list,12);
	 	echo "<br>";
	 	echo array_count_values($list)[12];
	 	print_r(explode(' ', $list2));
	?>
</body>
</html>