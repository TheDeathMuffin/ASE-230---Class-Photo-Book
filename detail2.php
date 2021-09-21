<!DOCTYPE HTML>
<html lang="eng" style="zoom: 150%;">
	<?php 
		require('data.php');
		require('functions.php');
		$i = $_GET["Index"];
		[$ageYear, $ageMonth, $ageDay] = calculateAge($masterArray[$i]["DOB"]);


	
	
	?>
	<head>
		<title>ASE 230 - <?=$masterArray[$i]['name']?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	
<!-- style="background-color: red;" -->
<!-- <div class=""></div> -->
	<body style="font-family: Arial, sans-serif; background-color: #9c9c9c;">
		<!--Entire Page Div-->
		<div class="" style="background-color: #9c9c9c;">
	
				<!--Header Bar Div-->
				<div class="" style="padding: 10px; background-color: #4bcfed; margin-bottom: 5px; height: 60px;"><h1 style=""></h1></div>

			<div class="" style="background-color: #353566; margin-bottom; padding-bottom: 15px;">
				<div class="" style="margin-left: 15%; margin-right: 15%;">
					<!--Name Title Bar Div-->
					<div class="" style="padding-left: 10px; margin-bottom: -16px;"><p style="font-size: 70px; color: #4bcfed;"><?=$masterArray[$i]['name']?></p></div>

					<!--Student List Div-->
					<div class="" style="height: 0 auto;">
						<div class="row" style="">
							<div class="col-md-4 col-sm-6 col-xs-12" style="">
								<div class="" style="margin-left: 10px;">
									<img class="z-depth-2" alt="100x100" src="<?=$masterArray[$i]["img"]?>" style="width: 220px; margin-bottom: 12px; border: solid black 3px;">
									<p style="font-size: 20px; color: #4bcfed;">Personal Information</p>
									<p style="color: #dddddd;">Age: <br /><?=$ageYear?><br /></p>
									<p style="color: #dddddd;"><i><?=$masterArray[$i]['name']," was born ",$ageYear," years, ",$ageMonth," month(s), and ",$ageDay," day(s) ago."?></i></p>
									<p style="color: #dddddd;">Dream Job: <br /><?=$masterArray[$i]['dProfession']?></p>
									<p style="color: #dddddd;">Dream Company: <br /><?=$masterArray[$i]['dCompany']?></p>
									<p style="font-size: 20px; color: #4bcfed;">Contact Information</p>
									<p style="color: #dddddd;">Email: <br /><?=$masterArray[$i]['email']?></p>
									<a style="color: #dddddd;" href="<?=$masterArray[$i]['linkedIn']?>"><img src="images/linkedin.png" alt="" style="width: 40px;"></a>
									<a style="color: #dddddd;" href="<?=$masterArray[$i]['facebook']?>"><img src="images/facebook.png" alt="" style="width: 40px;"></a>
									<a style="color: #dddddd;" href="<?=$masterArray[$i]['twitter']?>"><img src="images/twitter.png" alt="" style="width: 40px;"></a>
									<a style="color: #dddddd;" href="<?=$masterArray[$i]['instagram']?>"><img src="images/instagram.png" alt="" style="width: 40px;"></a>
									
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12" style="background-color: red;">
								<div class="" style="">
									<p style="font-size: 20px; color: #4bcfed;">About Me</p>
									<p style="color: #dddddd;"><?=$masterArray[$i]['intro']?></p>
									<p style="font-size: 20px; color: #4bcfed;">Fun Fact</p>
									<p style="color: #dddddd;"><?=$masterArray[$i]['funfact']?></p>
									<p style="font-size: 20px; color: #4bcfed;">Quote</p>
									<p style="color: #dddddd;"><?=$masterArray[$i]['quote']?></p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12" style="background-color: green;">
								<div class="" style="padding-left: 15px;">
									<p style="font-size: 20px; color: #4bcfed;">Technical Skills</p>
									<?php foreach($masterArray[$i]["skills"] as $skill) { ?>
										<p><?=$skill["name"],": "?></p>
										<p style="color: #dddddd;"><?=$skill['value']?></p>
									<?php }	?>
									
									
								</div>
							</div>
						</div>
					</div>

					<!--Footer Bar Div-->
				</div>
			</div>
			<div class="" style="padding: 10px; background-color: #4bcfed; margin-top: 5px; height: 20px;"><h1 style=""></h1></div>
		</div>
	</body>
</html>