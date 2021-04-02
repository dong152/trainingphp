
<?php
	
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" type="text/css" href="access/css/css.css1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<!------ Include the above in your HEAD tag ---------->
  </head>
  <body>
    <div>
	    <div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-3">
		            <div class="panel panel-primary">
		                <div class="panel-heading">
					    		<ul class="nav nav-tabs">
								  	<div class="row">
								  		<div class="col-md-6">
								  			<select class="nav-item" name="year" id="year" style="width: 90px;">
												<?php
												$html = '';
												for($i = 1; $i<=52; $i++)
												{
													$html.='<option class="dropdown-item" value="'.(1969+$i).'" id="year'.$i.'">'.(1969+$i).'</option>';
												}
												echo $html;
												?>
											</select>
											<select class="nav-item" name="gioitinh">
											  	<option value="">Nam</option>
											  	<option value="">Nữ</option>
											</select>
								  		</div>
									  	<div class="col-md-6">
									  		<li class="nav-item">
											    <button id="seen">Xem</button>
											</li>
									  	</div>
								  	</div>
								</ul>
						    	
							    <div>
							    	<?php
							    		$print_tuvi = '';
							    		// $demo= json_decode($Tu_vi,true);
							    		//print_r($demo);
							    		//$demo .= json_decode(json_encode($decode));
							    		$print_tuvi.='<img  style="margin: 10px;"src="access/images/tuoi_hoi.jpg">';
							    		//$print_tuvi.=$demo['a'];
							    		//echo $print_tuvi;
							    		//print_r($demo);
							    	?>  	
							    </div>
							    <div>
							    	<p id="haha"></p>
							    	<p id="hihi"></p>
							    </div>
		                    <span class="pull-right">
		                        <!-- Tabs -->
		                        <ul class="nav panel-tabs">
		                            <li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
		                        </ul>
		                    </span>
		                </div>
		                <div class="panel-body">
		                    
		                        
		                </div>
		            </div>
		        </div>
			</div>
		</div>
    </div>
<script type="text/javascript" src="access/js/js.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


