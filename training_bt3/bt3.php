<?php
	$json =
	'
{
	"name": "Dong",
	"id": "16520222",
	"Subjects":{
		"lap_trinh_web": {
			"point": {
				"30%": 8,
				"70%": 7
			}
		},
		"web_scurity":{
			"point": {
				"30%": 8,
				"70%": 7
			}
		},
		"php":{
			"point": {
				"30%": 8,
				"70%": 7
			}
		}

	},
	"ClassRoom":{
		"theory":{
			"a01":{
				"time": "7-9h"
			},
			"a02": {
				"time": "12-17h"
			}
		},
		"practice": {
			"b01":{
				"time": "7-9h"
			},
			"b02": {
				"time": "12-17h"
			}
		}
	}
}';
$decode = json_decode($json,true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		
	</style>
</head>
<body>
	<select name="selectbox" id="selectbox" style="margin-left: 5px;  min-width: 500px; padding: 3px;" size="30">
		<?php
			function out_put($Array,&$count)
			{
				$name = str_repeat('&nbsp', $count*5);
				foreach ($Array as $key => $value) {

					if (is_array($value)) {
						
						echo '<option value="'.$key.'">'.$name.$key.':</option>';
						$count++;
						out_put($value,$count);
						$count = 1;
					}
					else
					{
						
						echo '<option value="'.$key.'">'.$name.$key.': '.$value.'</option>';
					}
					
				}
			}
			$count = 0;
			out_put($decode,$count);
		?>
		
	</select>
</body>
</html>