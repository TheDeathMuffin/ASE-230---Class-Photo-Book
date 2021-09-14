<?php
	#This function takes in a date of birth	(MM-DD-YYYY) and outputs the years, months, and days it has been since that date given the current date.
	#It converts the entered DOB argument into a date object and determines the difference from the curret date.
		
	function calculateAge($DOB) {		#Function definition with person's Date of Birth as the parameter. 
		$todayDate = date_create(date('Y-m-d'));		#This turns the today's day (returned by "date('T-m-d', time())" into a date object.
		$DOB = date_create($DOB);		#Convert input DOB into a date object.
		$dateDifference = date_diff($todayDate, $DOB)->format('%Y-%m-%d');		#Stores the difference between todays date and the input DOB as a string.
		$dateArray = explode('-', $dateDifference);		#Splits the $dateDifference string on "-" and stores each section in the arrau $dateArray.
		$year = $dateArray[0];			#Stores the year from $dateArray.
		$month = $dateArray[1];			#Stores the month from $dateArray.
		$day = $dateArray[2];			#Stores the day from $dateArray.
		return [$year, $month, $day];					#Return the years, months, and days since the input DOB. 
	}
?>