<!doctype html>
<html lang="en">
	<?php 			
		require('data.php');				#Loads data.php into file so that student data can be accessed.
		require('functions.php');			#Loads functions.php into file so that the calculateAge() function can be used.
		function cardDisplay($ID) {			#This function displays a student's card with their corresponding information given their ID as a parameter.
			require('data.php');			#Loads data.php into file so that student data can be accessed within the function.
			[$ageYear, $ageMonth, $ageDay] = calculateAge($masterArray[$ID]["DOB"]);	#Date of birth is calculated and returned into the values #ageYear, $ageMonth, and $ageDay.
	?>										<!-- Card is created using HTML for structuring with PHP inserting student data. -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
					<!-- Team Thumb-->
					<div class="advisor_thumb"><a href="detail.php?ID=<?=$masterArray[$ID]["ID"]?>"><img src="<?=$masterArray[$ID]["img"];?>" alt=""></a>
						<!-- Social Info-->
						<div class="social-info"><a href="<?=$masterArray[$ID]["socialMedia"];?>"><i class="fa fa-facebook"></i></a><a href="<?=$masterArray[$ID]["socialMedia"];?>"><i class="fa fa-twitter"></i></a><a href="<?=$masterArray[$ID]["socialMedia"];?>"><i class="fa fa-linkedin"></i></a></div>
					</div>
					<!-- Team Details-->
					<?php
					for($t=0;$t<$masterArray[$ID]["year"];$t++) {
					?>
						<img src="images/year.png" alt="">
					<?php } ?>
					<div class="single_advisor_details_info">
						<h6><?=$masterArray[$ID]["name"];?></h6>
						<p class="designation"><?=$masterArray[$ID]["job"];?></p>
						<h7><?= "Age: $ageYear";?></h7><br>
						<p><i><?= "Time since DOB: $ageYear years, $ageMonth months, and $ageDay days.";?></i></p>
					</div>
				</div>
			</div>
		<?php
			}
		?>
	
	<head>
	<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/index.css" />
	<title><?= $classCode;?> - class of <?= "$classSeason $classYear";?></title>		
	</head>
	
	<body>
		<div class="container text-center">
			<h1>This is <?= $classCode;?> - class of <?= $classSeason; ?> <?= $classYear ?></h1>
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
			
			
			
			
				<?php
					foreach($masterArray as $student) {          	#This loop iterates through $masterList for as many keys (students) are stored.
						cardDisplay($student["ID"]);				#For each student, their ID is passed in as an argument for the function cardDisplay(), which then displays a card containing the student's information.
					}
				?>
					

			
			
			</div>
		</div>		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>