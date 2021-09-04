<!doctype html>
<html lang="en">
	<head>
		<?php
		#create an array for each person, containing all of their data. Make the page pull data from said arrays based on the GET value recieved (will change depending on the person).
		#
		#
			
		?>
		<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
		<title>This is <?php echo "$classCode - $name";?></title>
	</head>
	<body>
		<link rel="stylesheet" href="assets/css/detail.css" />
		<div class="container text-center mb-5">
			<h1>This is ASE 230 - <?php echo 'Samuel Long'; ?></h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6">
					<div class="mb-2">
						<img class="w-100" <?php echo 'src="images/profile.png"'; ?> alt="">
					</div>
					<div class="mb-2 d-flex">
						<h4 class="font-weight-normal"><?php echo 'Samuel Long'; ?></h4>
						<div class="social d-flex ml-auto">
							<p class="pr-2 font-weight-normal">Follow on:</p>
							<a href="<?php echo $facebook;?>" class="text-muted mr-1">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="<?php echo $twitter;?>" class="text-muted mr-1">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="<?php echo $instragram;?>" class="text-muted mr-1">
								<i class="fab fa-instagram"></i>
							</a>
							<a href="<?php echo $linkedin;?>" class="text-muted">
								<i class="fab fa-linkedin"></i>
							</a>
						</div>
					</div>
					<div class="mb-2">
					<ul class="list-unstyled">
					<li class="media">
					<span class="w-25 text-black font-weight-normal">Dream profession:</span>
					<label class="media-body"><?php echo $dream;?></label>
					</li>
					<li class="media">
					<span class="w-25 text-black font-weight-normal">Dream company: </span>
					<label class="media-body"><?php echo $dreamCo;?></label>
					</li>
					<li class="media">
					<span class="w-25 text-black font-weight-normal">Email: </span>
					<label class="media-body"><?php echo $email;?></label>
					</li>
					</ul>
					</div>
				</div>
				<div class="col-lg-7 col-md-6 pl-xl-3">
					<h5 class="font-weight-normal">Short intro</h5>
					<p><?php echo $intro;?></p>
					<div class="my-2 bg-light p-2">
						<p class="font-italic mb-0"><?php echo $quote;?></p>
					</div>
					<div class="mb-2 mt-2 pt-1">
						<h5 class="font-weight-normal">Top skills</h5>
					</div>
					<div class="py-1">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: <?php echo $perc1;?>" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar-title"><?php echo $skill1;?></div>
								<span class="progress-bar-number"><?php echo $perc1;?></span>
							</div>
						</div>
					</div>
					<div class="py-1">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width:<?php echo $perc2;?>" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar-title"><?php echo $skill2;?></div>
								<span class="progress-bar-number"><?php echo $perc2;?></span>
							</div>
						</div>
					</div>
					<div class="py-1">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width:<?php echo $perc3;?>" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar-title"><?php echo $skill3;?></div>
								<span class="progress-bar-number"><?php echo $perc3;?></span>
							</div>
						</div>
					</div>
					<h5 class="font-weight-normal">Fun fact</h5>
					<p><?php echo $funfact;?></p>
					<a href="<?php echo 'index.php'; ?>" class="font-weight-normal">
						<u><center><?php echo 'Back to Homepage'; ?></center></u>
					</a>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>