<!DOCTYPE HTML>
<html lang="eng" style="zoom: 150%;">
	<?php 
		require('data.php');
		require('functions.php');



	
	
	?>






	<head>
		<title>ASE 230 - Our Class</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	
<!-- style="background-color: red;" -->
<!-- <div class=""></div> -->
	<body style="font-family: Arial, sans-serif; background-color: #9c9c9c;">
		<!--Entire Page Div-->
		<div class="" style="background-color: #9c9c9c;">
		
			<!--Header Bar Div-->
			<div class="" style="padding: 10px; background-color: #4bcfed; margin-bottom: 5px; height: 60px;"></div><h1 style=""></h1></div>

			<!--Title Bar Div-->
			<div class="" style="background-color: #353566; padding: 120px; padding-top: 100px; margin-bottom: 50px;"><center><p style="font-size: 80px; color: #4bcfed;">ASE 230</p><img src="images/titleIcon.png" alt=""><br><br><h2 style="color: #dddddd;">This is Our Class</h2><h4 style="color: #dddddd;">The finest ASE 230 has ever seen...</h4></center></div>
		
			<!--Student List Div-->
			<div class="" style="">
				<!--Student List Div - defines window size-->
				<div class="row" style="margin-left: 15%; margin-right: 15%; width: 70%;">
					<!--Student Card - will be repeated-->
					<?php 
						$i = 0;
						
						for ($x = 0; $x <= 11; $x++) {
						if ($i == 0 || $i == 2) {
							$color = '#494954'; }
						elseif ($i == 1 || $i == 3) {
							$color = '#353566'; $i = -1;}
						$i++;
						
						[$ageYear, $ageMonth, $ageDay] = calculateAge($masterArray[$x]["DOB"]);
						
						switch ($masterArray[$x]["year"]){
							case 1: $textYear = "Freshman";
								break;
							case 2: $textYear = "Sophomore";
								break;
							case 3: $textYear = "Junior";
								break;
							case 4: $textYear = "Senior";
								break;
							default:
								$textYear = "Undefined"; }   #shadow-lg p-3 mb-5 bg-white rounded
						?>
						<div class="col-md-4 col-sm-6 col-xs-12 content" style="background-color: #9c9c9c; height: 450px;">
							<!--Student Card - formats card-->
							<div class="shadow">
							<div class="rounded shadow" style="background-color: <?=$color?>; padding: 15px; height: 90%; <!--border-style: groove;-->">
									<a href="detail2.php?Index=<?=$x?>"><center><img class="rounded-circle z-depth-2" alt="100x100" src="<?=$masterArray[$x]["img"]?>" style="width: 80%; margin-bottom: 12px; border: solid #a40000 3px;"></center></a>
								<h2 style="color: #4bcfed;"><?=$masterArray[$x]['name']?></h2>
								<h5 style="color: #dddddd;">Year: <?=$textYear?></h5>
								<h5 style="color: #dddddd;">Role: <?=$masterArray[$x]['job']?></h5>
								<h5 style="color: #dddddd;">Age: <?=$ageYear?></h5>
							</div>
							</div>
						</div>
					<?php }?>
			
					<!--Floating CreateStudent button-->
					<div class="rounded" style="position: fixed; left: 15px; bottom: 15px; background-color: #353566; padding: 10px;">
						<a href="delete.php" style="color: #4bcfed">Create Student</a>
					</div>
				</div>
			</div>
		
		
			<!--Footer Bar Div-->
			<div class=""></div>
		</div>
	</body>
</html>