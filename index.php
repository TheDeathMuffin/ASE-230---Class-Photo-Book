<!DOCTYPE HTML>
<html lang="eng">
	<?php 
		require('functions.php');
		require('json_util.php');
		//Creates an associative array with all the information from class.json
		$masterArray = readJSON('class.json');
		//function that displays a card with information from the masterArray. 
		function cardDisplay($x) {
			//function is used to write the from class.json into a masterArray.
			$masterArray = readJSON('class.json');
			//sets certain variables to a person's date of birth based on the index they're located in the masterArray
			[$ageYear, $ageMonth, $ageDay] = calculateAge($masterArray[$x]["DOB"]);	
			
			//Loop that's used to alternate card colors on the index page. 
			while (true) {
				if ($x == 0 || $x % 2 == 0) {
					$color = '#545460';
					break; }
				$color = '#a40000';
				break;
			}
			//Switch statement is used to check a person's year and adjust their card text
			//to include their year information
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
					$textYear = "Undefined";}
		?>
		
		<!--Student Card-->
		<div class="col-md-4 col-sm-6 col-xs-12 content b" style="height: 450px;">
			<div class="shadow">
				<div class="rounded shadow shadow shadow" style="background-color: <?=$color?>; padding: 15px; height: 90%;">
					<a href="detail.php?index=<?=$x?>"><center><img class="rounded-circle z-depth-2" alt="100x100" src="<?=$masterArray[$x]["img"]?>" style="width: 80%; margin-bottom: 12px; border: solid black 3px;"></center></a>
					<h2 class="textlb"><?=$masterArray[$x]['name']?></h2>
					<div class="textw">
						<h5>Year: <?=$textYear?></h5>
						<h5>Role: <?=$masterArray[$x]['job']?></h5>
						<h5>Age: <?=$ageYear?></h5>
					</div>
				</div>
			</div>
		</div>
			
		<?php } ?>
		
	<head>
		<title>ASE 230 - Our Class</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body class="lg" style="font-family: Arial, sans-serif;">
		
		<!--Top Bar-->
		<div class="lb topBar" style="padding: 10px; margin-bottom: 5px; height: 60px;"></div>

		<!--Title Bar-->
		<div class="bg-image" style="background-image: url('images/nerd2.png'); background-size: contain;">
			<div class="" style="background-color:rgba(53, 53, 102, 0.8); padding: 90px;"><center><p class="textlb" style="font-size: 80px;">ASE 230</p><img src="images/titleIcon.png" alt=""><br><br><h2 class="textw">This is Our Class</h2><h4 class="textw">The finest ASE 230 has ever seen...</h4></center></div>
		</div>
			
		<!--Student List Container-->
		<div class="b">
			
			<!--Student List Secondary Container-->
			<div class="row" style="margin-left: 15%; margin-right: 15%; width: 70%; padding-top: 30px;">
					
				<!--Loops Through the Main Array, Printing a Card per Student-->
				<?php 
					for ($x = 0; $x < count($masterArray); $x++) {
						cardDisplay($x);
					} 
				?>
					
				<!--Floating CreateStudent Button-->
				<div class="rounded dg" style="position: fixed; left: 15px; bottom: 30px; padding: 10px;">
					<a href="create.php" class="textlb" style="font-size: 130%;">Create Student</a>
				</div>
			</div>
		</div>
			
		<!--Footer Bar-->
		<div class="lb" style="padding: 10px; margin-top: 5px; height: 20px;"></div>
	</body>
</html>