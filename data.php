	<?php 
	#This file includes several variable definitions for general information as well as an associative array ($masterArray) containing associative arrays with each person's information. Contained within each student array
	#is the student's ID, name, DOB, year of University, job, profile image, social media links, dream profession, dream company, email address, introduction paragraph, quote, fun fact, and a list of their skills and their corresponding skill values.
	
		$classCode = "ASE 230";
		$classYear = "2021";
		$classSeason = "Fall";
		
		$masterArray = array(
			["name"=>"Samuel Long",
			"DOB"=>"2001-05-08",
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
			["name"=>"Munene Gatobu", 
			"DOB"=>"1000-12-31",
			"year"=>"2", 
			"job"=>"Real Human", 
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
			["name"=>"Pringus McDingus", 
			"year"=>"4", 
			"DOB"=>"2000-10-12",
			"job"=>"Developer", 
			"img"=>"images/profile3.png", 
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
		)	
	?>