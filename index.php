<!doctype html>
<html lang="en">
	<?php 
		$classCode = "ASE 230";
		$classYear = "2021";
		$classSeason = "Fall";
		$profile1 = "Samuel Long";
		$profile2 = "Nazrul Islam";
		$profile3 = "Riyadh Khan";
		$profile4 = "Niloy Islam";
		$img1 = "images/profile.png";
		$img2 = "https://bootdey.com/img/Content/avatar/avatar7.png";
		$img3 = "https://bootdey.com/img/Content/avatar/avatar6.png";
		$img4 = "https://bootdey.com/img/Content/avatar/avatar2.png";
		$profile1job = "Student";
		$profile2job = "UI Designer";
		$profile3job = "Developer";
		$profile4job = "Marketing Manager";
	?>
	<head>
	<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/index.css" />
	<title><?php echo $classCode;?> - class of <?php echo "$classSeason $classYear";?></title>
	</head>
	
	<body>
		<div class="container text-center">
			<h1>This is <?php echo $classCode;?> - class of <?php echo $classSeason; ?> <?php echo $classYear ?></h1>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-8 col-lg-6">
					<!-- Section Heading-->
					<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
						<h3>Our Creative <span> Team</span></h3>
						<p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
						<div class="line"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single Advisor-->
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
						<!-- Team Thumb-->
						<div class="advisor_thumb"><a href="samuel_long.php"><img src="<?php echo $img1; ?>" alt=""></a>
							<!-- Social Info-->
							<div class="social-info"><a href="samuel_long.php"><i class="fa fa-facebook"></i></a><a href="samuel_long.php"><i class="fa fa-twitter"></i></a><a href="samuel_long.php"><i class="fa fa-linkedin"></i></a></div>
						</div>
						<!-- Team Details-->
						<div class="single_advisor_details_info">
							<h6>
								<?php echo $profile1;?>
							</h6>
							<p class="designation">
								<?php echo $profile1job;?>
							</p>
						</div>
					</div>
				</div>
				<!-- Single Advisor-->
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
						<!-- Team Thumb-->
						<div class="advisor_thumb"><a href="samuel_long.php"><img src="<?php echo $img2; ?>" alt=""></a>
							<!-- Social Info-->
							<div class="social-info"><a href="samuel_long.php"><i class="fa fa-facebook"></i></a><a href="samuel_long.php"><i class="fa fa-twitter"></i></a><a href="samuel_long.php"><i class="fa fa-linkedin"></i></a></div>
						</div>
						<!-- Team Details-->
						<div class="single_advisor_details_info">
							<h6><?php echo $profile2; ?></h6>
							<p class="designation"><?php echo $profile2job;?></p>
						</div>
					</div>
				</div>
				<!-- Single Advisor-->
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
						<!-- Team Thumb-->
						<div class="advisor_thumb"><a href="samuel_long.php"><img src="<?php echo $img3;?>" alt=""></a>
							<!-- Social Info-->
							<div class="social-info"><a href="samuel_long.php"><i class="fa fa-facebook"></i></a><a href="samuel_long.php"><i class="fa fa-twitter"></i></a><a href="samuel_long.php"><i class="fa fa-linkedin"></i></a></div>
						</div>
						<!-- Team Details-->
						<div class="single_advisor_details_info">
							<h6><?php echo $profile3;?></h6>
							<p class="designation"><?php echo $profile3job;?></p>
						</div>
					</div>
				</div>
				<!-- Single Advisor-->
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<!-- Team Thumb-->
						<div class="advisor_thumb"><a href="samuel_long.php"><img src="<?php echo $img4;?>" alt=""></a>
							<!-- Social Info-->
							<div class="social-info"><a href="samuel_long.php"><i class="fa fa-facebook"></i></a><a href="samuel_long.php"><i class="fa fa-twitter"></i></a><a href="samuel_long.php"><i class="fa fa-linkedin"></i></a></div>
						</div>
						<!-- Team Details-->
						<div class="single_advisor_details_info">
							<h6><?php echo $profile4;?></h6>
							<p class="designation"><?php echo $profile4job;?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>