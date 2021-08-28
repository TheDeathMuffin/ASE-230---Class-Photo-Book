<!doctype html>
<html lang="en">
	<?php
		$classCode = "ASE 230";
		$name = "Samuel Long";
		$img = "images/profile.png";
		$facebook = "https://www.facebook.com/";
		$twitter = "https://www.twitter.com/";
		$instragram = "https://www.instagram.com/";
		$linkedin = "https://www.linkedin.com/";
		$dream = "Web Developer/Backend-Programmer";
		$dreamCo = "Tesla";
		$email = "longs6@mymail.nku.edu";
		$intro = "Living is changing. Unliving things do not change, at least not by their own will. So if you want to live, you must be prepared to let (or make) yourself change. It sounds easy to do, but can be very dificult because change often comes with discomfort and that is why learning to embrace that discomfort is so powerful.";
		$quote = "Once someone decides to stop changing, they become stagnated in the past and the present passes them by.";
		$funfact = "It is a general trend that the older one gets, the more set in their ways they become and consequently the less they are able to or are willing to accept and adhere to the new.";
		$perc1 = "10%";
		$perc2 = "85%";
		$perc3 = "6%";
	?>
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
		
	<body>
		<link rel="stylesheet" href="assets/css/detail.css" />
		<title>ASE 230 - <?php echo 'Samuel Long'; ?></title>
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
							<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar-title">Finance</div>
								<span class="progress-bar-number"><?php echo $perc1;?></span>
							</div>
						</div>
					</div>
					<div class="py-1">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width:85%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar-title">Information Technologies</div>
								<span class="progress-bar-number"><?php echo $perc2;?></span>
							</div>
						</div>
					</div>
					<div class="py-1">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width:6%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar-title">Education</div>
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