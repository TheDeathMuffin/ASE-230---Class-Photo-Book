<!DOCTYPE HTML>
<html lang="eng">
	<?php 
		require('data.php');
		require('functions.php');



	
	
	?>






	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	
<!-- style="background-color: red;" -->
<!-- <div class=""></div> -->
	<body>
		<!--Entire Page Div-->
		<div class="" style="background-color: #444466;">
		
			<!--Header Bar Div-->
			<div class="" style="padding: 10px; background-color: #353566; margin-bottom: 5px;"><div class="square" style="background-color: red; height: 55px; width: 55px; float: left;"></div><h1 style="padding-right: 55px;"><center>ASE 230</center></h1></div>

			<!--Title Bar Div-->
			<div class="" style="background-color: #353566; padding: 100px; margin-bottom: 50px;"><center><h2>This is Our Class</h2><h4>The finest ASE 230 has ever seen...</h4></center></div>
		
			<!--Student List Div-->
			<div class="" style="">
				<!--Student List Div - defines window size-->
				<div class="row" style="margin-left: 15%; margin-right: 15%; width: 70%;">
					<!--Student Card - will be repeated-->
					<?php 
						$i = 0;
						$restartLoop = 0;
						for ($x = 0; $x <= 30; $x++) {
						if ($i == 0 || $i == 5) {
							$color = '#ffdd33'; }
						elseif ($i == 1 || $i == 3) {
							$color = '#ffff55'; }
						elseif ($i == 2 || $i == 4) {
							$color = '#ffffff'; }
						elseif ($i == 6) {
							$restartLoop++; 
							$i = -3; }
						
						if ($restartLoop == 1) {
							$color = '#ffffff';
							$restartLoop++;	}
						elseif($restartLoop == 2) {
							$color = '#ffdd33';
							$restartLoop++;	}
						elseif ($restartLoop == 3) {
							$color = '#ffff55';
							$restartLoop = 0; }
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
						<div class="col-md-4 col-sm-6 col-xs-12 content" style="background-color: #444466; height: 450px;">
							<!--Student Card - formats card-->
							<div class="rounded shadow-lg mb-5" style="background-color: <?=$color?>; padding: 15px; height: 90%; border-style: groove;">
									<center><img class="rounded-circle z-depth-2" alt="100x100" src="images/profile.png" data-holder-rendered="true" style="width: 80%; margin-bottom: 12px;"></center>
								<h2><?=$masterArray[$x]['name']?></h2>
								<h5>Year: <?=$textYear?></h5>
								<h5>Role: <?=$masterArray[$x]['job']?></h5>
								<h5>Age: <?=$ageYear?></h5>
							</div>
						</div>
					<?php }?>
					
			
			
			
				</div>
			</div>
		
		
			<!--Footer Bar Div-->
			<div class=""></div>
		</div>
	</body>
</html>