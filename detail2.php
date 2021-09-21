<!DOCTYPE HTML>
<html lang="eng" style="zoom: 100%;">
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
	
<!-- <div class=""></div> -->
	<body style="font-family: Arial, sans-serif; background-color: #9c9c9c;">
		<!--Entire Page Div-->
		<div class="" style="background-color: #9c9c9c;">
	
				<!--Header Bar Div-->
				<div class="" style="padding: 10px; background-color: #4bcfed; margin-bottom: 5px; height: 60px;"><h1 style=""></h1></div>

			<div class="" style="background-color: #353566; margin-bottom; padding-bottom: 15px;">
				<div class="" style="margin-left: 15%; margin-right: 15%;">
					<!--Name Title Bar Div-->
					<div class="" style="padding-left: 10px;"><p style="font-size: 70px; color: #4bcfed; margin-left: -10px;"><?=$masterArray[$i]['name']?></p></div>

					<!--Student List Div-->
					<div class="" style="height: 0 auto;">
						<div class="row" style="">
							<div class="col-md-4 col-sm-6 col-xs-12" style="">
								<div class="" style="">
									<img class="z-depth-2" alt="100x100" src="<?=$masterArray[$i]["img"]?>" style="width: 220px; margin-bottom: 12px; border: solid black 3px;">
									<p style="font-size: 20px; color: #4bcfed;">Contact Information</p>
									<a style="" href="<?=$masterArray[$i]['linkedIn']?>"><img src="images/linkedin.png" alt="" style="width: 40px;"></a>
									<a style="" href="<?=$masterArray[$i]['facebook']?>"><img src="images/facebook.png" alt="" style="width: 40px;"></a>
									<a style="" href="<?=$masterArray[$i]['twitter']?>"><img src="images/twitter.png" alt="" style="width: 40px;"></a>
									<a style="" href="<?=$masterArray[$i]['instagram']?>"><img src="images/instagram.png" alt="" style="width: 40px;"></a>
									<p style="color: #dddddd;">Email: <br /><i><?=$masterArray[$i]['email']?></i></p>
									<p style="font-size: 20px; color: #4bcfed;">Personal Information</p>
									<p style="color: #dddddd;">Age: <br /><i><?=$ageYear?></i><br /></p>
									<p style="color: #dddddd;"><i><?=$masterArray[$i]['name']," was born ",$ageYear," years, ",$ageMonth," month(s), and ",$ageDay," day(s) ago."?></i></p>
									<p style="color: #dddddd;">Dream Job: <br /><i><?=$masterArray[$i]['dProfession']?></i></p>
									<p style="color: #dddddd;">Dream Company: <br /><i><?=$masterArray[$i]['dCompany']?></i></p>
									
									
								</div>
							</div>
							<div class="col-md-5 col-sm-6 col-xs-12" style="">
								<div class="" style="">
									<p style="font-size: 20px; color: #4bcfed;">Introduction</p>
									<p style="font-size: 15px; color: #dddddd;"><?=$masterArray[$i]['intro']?></p>
									<p style="font-size: 20px; color: #4bcfed;">Fun Fact</p>
									<p style="font-size: 15px; color: #dddddd;"><?=$masterArray[$i]['funfact']?></p>
									<p style="font-size: 20px; color: #4bcfed;">Quote</p>
									<p style="font-size: 15px; color: #dddddd;"><?=$masterArray[$i]['quote']?></p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12" style="">
								<div class="" style="padding-left: 15px;">
									<p style="font-size: 20px; color: #4bcfed;">Technical Skills</p>
									<?php foreach($masterArray[$i]["skills"] as $skill) { ?>
										<p style="color: #dddddd"><?=$skill["name"],": "?></p>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: <?=$skill['value']?>%; background-color: #a40000;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?=$skill['value']?>%</div>
										</div><br><br>
									<?php }	?>
									
									
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!--Footer Bar Div-->
			<div class="" style="padding: 10px; background-color: #4bcfed; margin-top: 5px; height: 20px;"><h1 style=""></h1></div>
		</div>
	</body>
</html>