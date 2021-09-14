<!doctype html>
<html lang="en">
	<?php 
		include 'data.php';						#Loads data.php into file so that student data can be accessed.
		include 'functions.php';				#Loads functions.php into file so that the calculateAge() function can be used.
		$i = $_GET["Index"];						#$_GET["ID"] value stored in $i. This identifies the student that was selected in order to display the appropriate information.
		[$ageYear, $ageMonth, $ageDay] = calculateAge($masterArray[$i]["DOB"]);				#Date of birth is calculated and returned into the values #ageYear, $ageMonth, and $ageDay. 
	?>
	<head>
		<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
		<title>This is <?="$classCode?"?> - <?=$masterArray[$i]["name"]?></title>
	</head>
	<body>
		<link rel="stylesheet" href="assets/css/detail.css" />
		<div class="container text-center mb-5">
			<h1>This is <?= "$classCode"?> - <?=$masterArray[$i]["name"]?></h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6">
					<div class="mb-2">
						<img class="w-100" src="<?=$masterArray[$i]["img"]?>" alt="">
					</div>
					<div class="mb-2 d-flex">
						<h4 class="font-weight-normal"><?=$masterArray[$i]["name"]?></h4>
						<div class="social d-flex ml-auto">
							<p class="pr-2 font-weight-normal">Follow on:</p>
							<a href="<?=$masterArray[$i]["socialMedia"]?>" class="text-muted mr-1">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="<?=$masterArray[$i]["socialMedia"]?>" class="text-muted mr-1">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="<?=$masterArray[$i]["socialMedia"]?>" class="text-muted mr-1">
								<i class="fab fa-instagram"></i>
							</a>
							<a href="<?=$masterArray[$i]["socialMedia"]?>" class="text-muted">
								<i class="fab fa-linkedin"></i>
							</a>
						</div>
					</div>
					<div class="mb-2">
					<ul class="list-unstyled">
					<li class="media">
					<span class="w-25 text-black font-weight-normal">Dream profession:</span>
					<label class="media-body"><?=$masterArray[$i]["dProfession"]?></label>
					</li>
					<li class="media">
					<span class="w-25 text-black font-weight-normal">Dream company: </span>
					<label class="media-body"><?=$masterArray[$i]["dCompany"]?></label>
					</li>
					<li class="media">
					<span class="w-25 text-black font-weight-normal">Email: </span>
					<label class="media-body"><?=$masterArray[$i]["email"]?></label>
					</li>
					</ul>
					</div>
				</div>
				<div class="col-lg-7 col-md-6 pl-xl-3">
					<h5 class="font-weight-normal">Short intro</h5>
					<p><?=$masterArray[$i]["intro"]?></p>
					<h6>Age: <?= $ageYear?></h6>
					<h7><i><?= $masterArray[$i]["name"]?> was born <?= "$ageYear years, $ageMonth months, and $ageDay days ago."?></i></h7>
					<div class="my-2 bg-light p-2">
						<p class="font-italic mb-0"><?=$masterArray[$i]["quote"]?></p>
					</div>
					<div class="mb-2 mt-2 pt-1">
						<h5 class="font-weight-normal">Top skills</h5>
					</div>
					
					
					<?php
					foreach($masterArray[$i]["skills"] as $skill) {
					?>
					<div class="py-1">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: <?=$skill["value"]?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar-title"><?=$skill["name"]?></div>
								<span class="progress-bar-number"><?=$skill["value"]?></span>
							</div>
						</div>
					</div>
					<?php }	?>
					
					
					<h5 class="font-weight-normal">Fun fact</h5>
					<p><?=$masterArray[$i]["funfact"]?></p>
					<a href="<?='index.php';?>" class="font-weight-normal">
						<u><center><?='Back to Homepage';?></center></u>
					</a>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>