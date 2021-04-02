<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$Supper_Array = array(
		'goc_nhin'=>array(
			'addr'=>'https://vnexpress.net/goc-nhin',
			'the_div'=>array(
				array(
					'#article\sclass=.*<\/article#imsU',
					array(
						'link'=>'#href="(.*\.html)"#imsU',
						'title'=>'#title="(.*)"#imsU',
						'content'=>'#<p\sclass="description">(.*)<\/p>#imsU',
						'tac_gia'=>'#<span\sclass="meta_author".*<a.*">(.*)</a>#imsU'
					)
				)
			)
		),
		'the_gioi'=>array(
			'addr'=>'https://vnexpress.net/the-gioi',
			'the_div'=>array(
				array(
					'#<article\sclass="item-news\sfull-thumb\sarticle-topstory".*</p>.*</article>#imsU',
					array(
						'link'=>'#href="(.*\.html)"#imsU',
						'title'=>'#title="(.*)"#imsU',
						'content'=>'#<p\sclass="description">.*title=".*">(.*)</a>.*</p>#imsU',
						'image'=>'#src="(.*)">#imsU',
						'time'=>'#datetime="(.*)">(.*)#imsU'
					)
				),
				array(
					'#<li>\s*<h3\sclass="title_news".*<\/p>.*<\/li>#imsU',
					array(
						'link'=>'#href="(.*\.html)"#imsU',
						'title'=>'#title="(.*)"#imsU',
						'content'=>'#<p\sclass="description">.*title=".*">(.*)</a>.*</p>#imsU'	
					)
				),
				array(
					'#<article\sclass="item-news.*</p>.*</article>#imsU',
					array(
						'link'=>'#data-thumb="1".*href="(.*\.html)"#imsU',
						'title'=>'#data-medium=".*title="(.*)"#imsU',
						'content'=>'#<p\sclass="description">.*title=".*">(.*)</a>.*</p>#imsU',
						'image'=>'#src="(http.*)">#imsU',
						'time'=>'#datetime="(.*)">(.*)#imsU'
					)
				)
			)
		)
	);
	function Supper_get($Supper_Array)
	{
		$Array_out = array();
		foreach ($Supper_Array as $key => $value) {//vao cac trang: goc nhin, the gioi
			$curl = file_get_contents($value['addr']);//phan tử thứ nhất của mảng góc nhìn là địa chỉ trang.
			$array_con1 = array();
			foreach ($value['the_div'] as $key1 => $value1) {//phan tử thứ hai của mảng góc nhìn là các khối lớn
				$array_con2 = array();
				preg_match_all($value1[0], $curl,$arr);//phần tử đầu của khối lớn là điều kiện lọc các div nhỏ.
				foreach ($arr[0] as $key2 => $value2) {//truy cập mảng vừa lọc gồm các div nhỏ của phần tử lớn.
					foreach ($value1[1] as $key3 => $value3) {//phần tử thứ 2 của khối lớn là array các lọc nhỏ: title, image,...
						preg_match($value3, $value2, $arr2);
						if(!empty($arr2))
							$array_con2[$key2][$key3] = trim($arr2[1]);//đưa vào mảng được đánh số.
					}

				}
				$array_con1[$key1] = $array_con2;//đưa mảng nhỏ vào mảng to được đánh số bên ngoài.
				unset($array_con2);
			}

			$Array_out[$key] = $array_con1;//đưa vào mảng được đánh số bao lớn nhất.
				unset($array_con1);
		}
		return $Array_out;
		
	}
	
	
?>
<textarea style="width: 90%; height: 900px ;size: 40;" ><<?php echo "<pre>";
	print_r( Supper_get($Supper_Array));
	echo "</pre>"; ?></textarea>
</body>
</html>
