<!doctype html>
<html lang="en">
	<?php 
		
		$classCode = "ASE 230";
		$classYear = "2021";
		$classSeason = "Fall";
		
		$masterArray = array(
			"001"=>["ID"=>"001",
				"name"=>"Samuel Long", 
				"year"=>"3", 
				"job"=>"Programmer", 
				"img"=>"images/profile.png", 
				"socialMedia"=>"https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley", 
				"dProfession"=>"Programmer", 
				"dCompany"=>"SpaceX",
				"email"=>"longs6@mymail.nku.edu", 
				"intro"=>"My introduction just ended.", 
				"quote"=>"Hello there!", 
				"funfact"=>"\"Mad Max: Fury Road\" is guud.", 
				"skills"=>[
					["name"=>"Networking", "value"=>"80"],
					["name"=>"System Administration", "value"=>"70"],
					["name"=>"Programming", "value"=>"72"]
				]
			],
			"002"=>["ID"=>"002",
				"name"=>"Munene Gatobu", 
				"year"=>"2", 
				"job"=>"Dedicated Human", 
				"img"=>"images/profile2.png", 
				"socialMedia"=>"https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley", 
				"dProfession"=>"Remain a Human", 
				"dCompany"=>"Amazon Warehouse", 
				"email"=>"gatobum1@mymail.nku.edu", 
				"intro"=>"I am a hooman.", 
				"quote"=>"I'm a happy little accident.", 
				"funfact"=>"Wee woo wee woo", 
				"skills"=>[
					["name"=>"Eating", "value"=>"10"],
					["name"=>"Sleeping", "value"=>"12"],
					["name"=>"Breathing", "value"=>"100"],
					["name"=>"Crab Walking", "value"=>"70"]
				]
			],
			"003"=>["ID"=>"003",
				"name"=>"Pringus McDingus", 
				"year"=>"4", 
				"job"=>"Developer", 
				"img"=>"https://bootdey.com/img/Content/avatar/avatar6.png", 
				"socialMedia"=>"https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley", 
				"dProfession"=>"Application Developer", 
				"dCompany"=>"Google", 
				"email"=>"developermcdingus@myemail.com", 
				"intro"=>"I am a developer. I am still developing.", 
				"quote"=>"Dev dev dev dev dev.", 
				"funfact"=>"Developing more code NOW!", 
				"skills"=>[
					["name"=>"Developing Code", "value"=>"100"],
					["name"=>"Coding", "value"=>"99"]
				]
			]
		);
		$i = $_GET["ID"];
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