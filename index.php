<!DOCTYPE HTML>
<html lang="en">
	<?php 			
		require('data.php');				#Loads data.php into file so that student data can be accessed.
		require('functions.php');			#Loads functions.php into file so that the calculateAge() function can be used.
		
		function cardDisplay($Index) {			#This function displays a student's card with their corresponding information given their ID as a parameter.
			require('data.php');			#Loads data.php into file so that student data can be accessed within the function.
			[$ageYear, $ageMonth, $ageDay] = calculateAge($masterArray[$Index]["DOB"]);	#Date of birth is calculated and returned into the values #ageYear, $ageMonth, and $ageDay.
			switch ($masterArray[$Index]["year"]){
				case 1: $textYear = "Freshman";
					break;
				case 2: $textYear = "Sophomore";
					break;
				case 3: $textYear = "Junior";
					break;
				case 4: $textYear = "Senior";
					break;
				default:
					$textYear = "Undefined";
			}
	?>										<!-- Card is created using HTML for structuring with PHP inserting student data. -->
			<div class="col-md-4 col-sm-6 col-xs-12 content" style="">
				<div class="rounded" style="background-color: #629677; height: auto; margin-top: 25px; margin-bottom: 30px; padding: 15px;">
					<a href="detail.php?Index=<?=$Index?>"><img src="<?=$masterArray[$Index]["img"];?>" alt="profile image" class="img-fluid"></a>
					<div class="row">
						<div class="col-md-8 col-sm-1 col-xs-1 content">
							<div style="text-align: left;">
								<h3><?=$masterArray[$Index]["name"];?></h3>
								<i>Role: <?=$masterArray[$Index]['job'];?></i><br>
								<i>Year: <?=$textYear;?></i><br>
								<i>Age: <?=$ageYear;?></i><br>
							</div>
						</div>
						<div class="col-md-4 col-sm-1 col-xs-1 content">
							<div style="text-align: right;">
								<br><u>Social Media</u><br>
								<a href="<?=$masterArray[$Index]['linkedIn'];?>">LinkedIn</a><br>
								<a href="<?=$masterArray[$Index]['facebook'];?>">Facebook</a><br>
								<a href="<?=$masterArray[$Index]['twitter'];?>">Twitter</a>
							</div>
						</div>
					</div>
				</div>
			</div>	
	<?php } ?>
	<head>
		<title>This is ASE 230</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>	
		<div style="max-width: 1300px; margin: 0 auto; padding: 0px;">
			
			<div class="container-fluid text-center" style="padding: 10px; margin-top: 30px auto; height: auto; background-color: #D7BCC8;">
				<h1>This is ASE 230 - class of Fall 2021</h1>
				<h2>Our Creative Team</h2>
			</div>
		
			
			
			<div class="row text-center" style="background-color: #98B6B1;">
				<?php
					for ($x = 0; $x < count($masterArray); $x++) {
						cardDisplay($x);
					}
				?>
			</div>
		
		
		
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>


<div class=""></div>