<!doctype html>
<html lang="en">
	<?php 
		include 'data.php';						#Loads data.php into file so that student data can be accessed.
		include 'functions.php';				#Loads functions.php into file so that the calculateAge() function can be used.
		$i = $_GET["Index"];						#$_GET["ID"] value stored in $i. This identifies the student that was selected in order to display the appropriate information.
		[$ageYear, $ageMonth, $ageDay] = calculateAge($masterArray[$i]["DOB"]);				#Date of birth is calculated and returned into the values #ageYear, $ageMonth, and $ageDay. 
	?>
	<head>
		<title>This is ASE 230 - <?=$masterArray[$i]["name"]?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
	</head>
	<body style="background-color: #98B6B1;">		
		<div class="container-fluid text-center" style="padding: 10px; margin-top: 30px auto; height: auto; background-color: #D7BCC8;">
			<h1>This is ASE 230 - <?=$masterArray[$i]["name"]?></h1>
		</div>
		<div class="container-fluid" style="padding-top: 25px; margin-bottom: 25px;">
<!--#image on the right, details on the left. intro stuff below. Or intro on the lft. -->
			<div class="row" style="height: 0 auto;">
				
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="rounded-top" style="background-color: #629677; text-align: center; padding-top: 18px;"><img src="<?=$masterArray[$i]["img"]?>" class="img-fluid" style="padding: 10px;"></div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12" style="">
					<div class="rounded-right" style="background-color: #629677; padding: 10px; margin-left: -40px; height: 92%;">
						<h3><?=$masterArray[$i]["name"]?></h3>
						<h6>Age: <?= $ageYear?></h6>
						<p><i><?= $masterArray[$i]["name"]?> was born <?= "$ageYear years, $ageMonth months, and $ageDay days ago."?></i></p>
						<p>Social Media:</p>
						<h6><a href="<?=$masterArray[$i]["linkedIn"]?>">LinkedIn</a></h6>
						<h6><a href="<?=$masterArray[$i]["twitter"]?>">Twitter</a></h6>
						<h6><a href="<?=$masterArray[$i]["facebook"]?>">Facebook</a></h6>
						<h6><a href="<?=$masterArray[$i]["instagram"]?>">Instrgram</a></h6>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12"">
					<div class="rounded" style="background-color: #629677; padding: 15px; height: 92%;">
						<p>Dream profession: <br><?=$masterArray[$i]["dProfession"]?></p>
						<p>Email: <br><?=$masterArray[$i]["email"]?></p>
						<p>Dream company: <br><?=$masterArray[$i]["dCompany"]?></p>
					</div>
				</div>
				
				<div class="col-md-2 col-sm-12 col-xs-12">
					<div class="rounded" style="background-color: #629677; padding: 15px; height: 92%;">
						<?php
						foreach($masterArray[$i]["skills"] as $skill) {
						?>
						<p><?=$skill["name"],": "?></p>
						<h6><i><?=$skill["value"],"/100"?></i></h6>
						<?php }	?>
					</div>
				</div>
			
			</div>
			<div class="row" style="height: 200px;">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="rounded-bottom" style="background-color: #629677; padding: 10px;">
						<h5 class="font-weight-normal">Short intro</h5>
						<p><?=$masterArray[$i]["intro"]?></p>
					</div>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="rounded" style="padding: 15px; background-color: #629677;">
						<h5 class="font-weight-normal">Quote</h5>
						<p><?=$masterArray[$i]["quote"]?></p>
						<h5 class="font-weight-normal">Fun Fact</h5>
						<p><?=$masterArray[$i]["funfact"]?></p>
					</div>
				</div>
			</div>
		</div>
		<center><a href="index.php">Back to Homepage</a></center><br>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>