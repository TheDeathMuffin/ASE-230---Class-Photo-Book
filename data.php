	<?php 
	#This file includes several variable definitions for general information as well as an associative array ($masterArray) containing associative arrays with each person's information.
	
		$classCode = "ASE 230";
		$classYear = "2021";
		$classSeason = "Fall";
		
		$masterArray = array(
			"001"=>["ID"=>"001",
				"name"=>"Samuel Long",
				"DOB"=>"03-31-1981",
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
				"DOB"=>"12-31-1000",
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
			"003"=>["ID"=>"003",
				"name"=>"Pringus McDingus", 
				"year"=>"4", 
				"DOB"=>"10-12-2000",
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