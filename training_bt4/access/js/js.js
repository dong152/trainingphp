
//var demo = JSON.parse(infor)['a'];
	
function test()
{
 	
 	function readTextFile(file, callback) {
	    var rawFile = new XMLHttpRequest();
	    rawFile.overrideMimeType("application/json");
	    rawFile.open("GET", file, true);
	    rawFile.onreadystatechange = function() {
	        if (rawFile.readyState === 4 && rawFile.status == "200") {
	            callback(rawFile.responseText);
	        }
	    }
	    rawFile.send(null);
	}

	//usage:
	
 	var seen = document.getElementById('year');
	var y = seen.value;
	var num = '';
	switch(y%12)
	{
		case 0:
		{
			num = 'than';
			break;
		}
		case 1:
		{
			num = 'dau';
			break;
		}
		case 2:
		{
			num = 'tuat';
			break;
		}
		case 3:
		{
			num = 'hoi';
			break;
		}
		case 4:
		{
			num = 'ty';
			break;
		}
		case 5:
		{
			num = 'suu';
			break;
		}
		case 6:
		{
			num = 'dan';
			break;
		}
		case 7:
		{
			num = 'mao';
			break;
		}
		case 8:
		{
			num = 'thin';
			break;
		}
		case 9:
		{
			num = 'ti';
			break;
		}
		case 10:
		{
			num = 'ngo';
			break;
		}
		
	}
	//var demo = JSON.parse(data)[num];
	document.getElementById('haha').innerHTML = ('<img  style="margin: 10px; float: left;"src="access/images/tuoi_'+num+'.jpg">');
	readTextFile("../training_bt4/access/json/list.json", function(text){
	    var data = JSON.parse(text);
	    document.getElementById('hihi').innerHTML = data[num];
	});

	console.log(y%12);

}
document.getElementById('seen').onclick= test;
//document.getElementById('hihi').innerHTML = demo;
	