<?php
	#This function takes in a date of birth	(MM-DD-YYYY) and outputs the years, months, and days it has been since that date given the current date.
		
	function calculateAge($DOB) {		#Function definition with person's Date of Birth as the parameter. 
		$eDOB = explode('-', $DOB);		#Separates $DOB around "-" and stores it in an array $eDOB.
		$date = explode('-', date('m-d-Y', time()));	#Separates the current date around "-" and stores in an array $date.
		$bMonth = $eDOB[0]; 			#Birth month stored.
		$bDay = $eDOB[1];				#Birth day stored.
		$bYear = $eDOB[2];				#Birth year stored.
		$cMonth = $date[0];				#Current month stored.
		$cDay = $date[1];				#Current day stored.
		$cYear = $date[2];				#Current year stored.
		$isLeapYear = false;			#Leap year is false by default.
		
		if ($cYear%4 == 0 && $cYear%100 != 0) { $isLeapYear = true; }	#Determines if current year is a leap year (a multiple of 4 that is not XX00).
		
		$yearDifference = $cYear - $bYear;				#Calculates difference in years.
		
		$monthDifference = $cMonth - $bMonth;			#Calculates difference in months.
		if ($monthDifference < 0) {						#If the difference in months is negative, then the year difference is actually 1 year less.
			$yearDifference--;							#Remove 1 from the difference in years.
			$monthDifference = 12 + $monthDifference;	#Calculates the new difference in months.
		}
		
		$dayDifference = $cDay - $bDay;					#Calculates difference in days.
		if ($dayDifference <= 0) {						#If the differnce in days is negative, continue...
			if ($cMonth == $bMonth)						#If the birth month and current month are the same, no need to remove 1 from the month difference.
				$dayDifference = $dayDifference * -1;	#Instead, make differnce in days positive.
			else{
				$monthDifference--;						#If the birth month and current month are not the same, remove 1 from the difference in months.
				if ($cMonth == '02' && $isLeapYear)		#If the current month is February and it is a leap year, then the days in the month are 28.
					$dayDifference = 28 + $dayDifference;				#Set day difference equal to 28 plus the day difference.
				else {									#If the current month is not a February on a leap year, continue...
					switch($bMonth) {					#Switch for months and their corresponding day lengths.
						case '04': $dayDifference = 30 + $dayDifference; break;		#April = 30 days.
						case '06': $dayDifference = 30 + $dayDifference; break;		#June = 30 days.
						case '09': $dayDifference = 30 + $dayDifference; break;		#September = 30 days.
						case '11': $dayDifference = 30 + $dayDifference; break;		#November = 30 days.
						case '02': $dayDifference = 29 + $dayDifference; break;		#February = 29 days.
						default: $dayDifference = 31 + $dayDifference;				#All other months have 31 days.
					}
				}
			}
		}
		return [$yearDifference, $monthDifference, $dayDifference];					#Return the years, months, and days since the input birthday. 
	}
?>