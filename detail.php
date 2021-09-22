<!DOCTYPE HTML>
<html lang="eng" style="zoom: 100%;">
	<?php 
		require('functions.php');
		require('json_util.php');
		$masterArray = readJSON('class.json');
		$i = $_GET["index"];
		[$ageYear, $ageMonth, $ageDay] = calculateAge($masterArray[$i]["DOB"]);
	?>
	<head>
		<title>ASE 230 - <?=$masterArray[$i]['name']?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body class="lg" style="font-family: Arial, sans-serif;">
		
		<!--Top Bar-->
		<div class="lb topBar" style="padding: 10px; margin-bottom: 5px; height: 60px;"></div>
		
		<!--Body Container-->
		<div class="b" style="padding-bottom: 15px;">
			
			<!--Body Secondary Container-->
			<div class="" style="margin-left: 15%; margin-right: 15%;">
				
				<!--Name Title Bar-->
				<div class="row">
					
					<!--Name Title-->
					<div class="col-md-8 col-sm-12 col-xs-12 textlb" style="padding-left: 10px;"><p style="font-size: 70px; margin-left: -10px;"><?=$masterArray[$i]['name']?></p></div>
					
					<!--Modify User Button-->
					<div class="col-md-2 col-sm-12 col-xs-12">
						<div class="rounded green" style="text-align: center; width: 200px; padding: 10px;">
							<a href="modify.php?index=<?=$i?>&name=Lewis" class="textw" style="font-size: 130%;">Modify User</a>
						</div>
					</div>
					
					<!--Delete User Button-->
					<div class="col-md-2 col-sm-12 col-xs-12">
						<div class="rounded red" style="text-align: center; width: 200px; padding: 10px;">
							<a href="delete.php?index=<?=$i?>" class="textw" style="font-size: 130%;">Delete User</a>
						</div>
					</div>
				</div>
				<!--Column Container-->
				<div class="row" style="">
						
					<!--Column 1-->
					<div class="col-md-4 col-sm-6 col-xs-12" style="">
						<img class="z-depth-2" alt="100x100" src="<?=$masterArray[$i]["img"]?>" style="width: 220px; margin-bottom: 12px; border: solid black 3px;">
						<p class="textlb" style="font-size: 20px;">Contact Information</p>
						<a href="<?=$masterArray[$i]['linkedIn']?>"><img src="images/linkedin.png" alt="40x40" class="iconImg"></a>
						<a href="<?=$masterArray[$i]['facebook']?>"><img src="images/facebook.png" alt="40x40" class="iconImg"></a>
						<a href="<?=$masterArray[$i]['twitter']?>"><img src="images/twitter.png" alt="40x40" class="iconImg"></a>
						<a href="<?=$masterArray[$i]['instagram']?>"><img src="images/instagram.png" alt="40x40" class="iconImg"></a><br><br>
						<p class="textw">Email: <br /><i><?=$masterArray[$i]['email']?></i></p>
						<p class="textlb" style="font-size: 20px;">Personal Information</p>
						
						<!--Personal Information Container-->
						<div class="textw">
							<p>Age: <br /><i><?=$ageYear?></i><br /></p>
							<p><i><?=$masterArray[$i]['name']," was born ",$ageYear," years, ",$ageMonth," month(s), and ",$ageDay," day(s) ago."?></i></p>
							<p>Dream Job: <br /><i><?=$masterArray[$i]['dProfession']?></i></p>
							<p>Dream Company: <br /><i><?=$masterArray[$i]['dCompany']?></i></p>
						</div>
					</div>
					
					<!--Column 2-->
					<div class="col-md-5 col-sm-6 col-xs-12" style="">
						<p class="textlb" style="font-size: 20px;">Introduction</p>
						<p class="textw" style="font-size: 15px;"><?=$masterArray[$i]['intro']?></p>
						<p class="textlb" style="font-size: 20px;">Fun Fact</p>
						<p class="textw" style="font-size: 15px;"><?=$masterArray[$i]['funfact']?></p>
						<p class="textlb" style="font-size: 20px;">Quote</p>
						<p class="textw" style="font-size: 15px;"><?=$masterArray[$i]['quote']?></p>
					</div>
					
					<!--Column 3-->
					<div class="col-md-3 col-sm-12 col-xs-12">
						<div class="" style="padding-left: 15px;">
							<p class="textlb" style="font-size: 20px;">Technical Skills</p>
							<?php foreach($masterArray[$i]["skills"] as $skill) { ?>
								<p class="textw"><?=$skill["name"],": "?></p>
								<div class="progress">
									<div class="progress-bar red" role="progressbar" style="width: <?=$skill['value']?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?=$skill['value']?>%</div>
								</div><br><br>
							<?php }	?>
						</div>
					</div>
				</div>
				<div class="rounded dg" style="text-align: center; margin-left: 40%; margin-right: 40%; padding: 10px; width: 160px;">
					<a href="index.php" class="textlb" style="font-size: 130%;">Back to Home</a>
				</div>
			</div>
		</div>
		
		<!--Footer Bar-->
		<div class="lb" style="padding: 10px; margin-top: 15px; height: 20px;"><h1 style=""></h1></div>
	</body>
</html>