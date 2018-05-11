<?php
date_default_timezone_set("America/Chicago"); //This is configured to autoset to the correct time. It it doesn't work, tell me.
$h = date('G'); //set variable $h to the hour of the day.
$m = date('i'); //set variable $m to the min of the hour.
$d = date('w'); //set variable $d to the day of the week.
$year = date('Y'); //set variable $year to the current year
$day = time('day');
//G is the date key for hours in 24 format (not 12), with no leading 0s, like 02.
// Adjust 2 hour offset for MST below.
// As I say above, date clock is in 24 hr. Converter can be found here. 
// http://www.aaamath.com/meatm2s.htm
$h = $h;
$d = $d;
$img = 'auto.png';


//replace #image with your file directory or image hosting link. I prefer imgur.
if ($d == 0) $day = 'Sunday';
if ($d == 1) $day = 'Monday';
if ($d == 2) $day = 'Tuesday';
if ($d == 3) $day = 'Wednesday';
if ($d == 4) $day = 'Thursday';
if ($d == 5) $day = 'Friday';
if ($d == 6) $day = 'Saturday';

// if you 2400 a tuesday night, you must 0000 the following wednesday morning. there MUST be a turnover on the clock. the day ($d == (interger) must also carry over. EXAMPLE:
// Look below us at sunday. "else if ($d == 0" on the midnight turnover. Right after that you have else if "($d == 1" this is telling the clock the day has changed, and where to go.
// You can work that so that the day clock is with the actual next day itself, but I'm an idiot hackforums coder who forgets to do that shit. tl:dr from honeybun = check your date in the else if statement

// SUNDAY SCHEDULE
if ($d == 0 && $h >= 0 && $h < 5) $img = '#image';				//	12 AM (midnight) - 5 AM
else if ($d == 0 && $h >= 5 && $h < 9) $img = '#image';			//	5 AM - 9 AM
else if ($d == 0 && $h >= 9 && $h < 12) $img = '#image';			//	9 AM - 12 PM (noon)
else if ($d == 0 && $h >= 12 && $h < 16) $img = '#image';	//	12 PM (noon) - 4 PM
else if ($d == 0 && $h >= 16 && $h < 19) $img = '#image'; 	//	4 PM - 7 PM
else if ($d == 0 && $h >= 19 && $h < 20) $img = '#image'; 	//	7 PM - 8 PM
else if ($d == 0 && $h >= 20 && $h < 24) $img = '#image'; 	//				8 PM - Midnight Turnover (24:00 hours)
else if ($d == 1 && $h < 0) $img = '#image'; 						//	notate the day turnover to midnight

// MONDAY SCHEDULE
if ($d == 1 && $h >= 0 && $h < 5) $img = '#image';
else if ($d == 1 && $h >= 5 && $h < 9) $img = '#image';
else if ($d == 1 && $h >= 9 && $h < 14) $img = '#image';
else if ($d == 1 && $h >= 14 && $h < 19) $img = '#image';
else if ($d == 1 && $h >= 19) $img = '#image';
else if ($d == 2 && $h < 0) $img = '#image';

// TUESDAY SCHEDULE
if ($d == 2 && $h >= 0 && $h < 5) $img = '#image';
else if ($d == 2 && $h >= 5 && $h < 9) $img = '#image';
else if ($d == 2 && $h >= 9 && $h < 14) $img = '#image';
else if ($d == 2 && $h >= 14 && $h < 19) $img = '#image';
else if ($d == 2 && $h >= 19) $img = '#image';
else if ($d == 3 && $h < 0) $img = '#image';


// WEDNESDAY SCHEDULE
if ($d == 3 && $h >= 0 && $h < 5) $img = '#image';
else if ($d == 3 && $h >= 5 && $h < 9) $img = '#image';
else if ($d == 3 && $h >= 9 && $h < 14) $img = '#image';
else if ($d == 3 && $h >= 14 && $h < 19) $img = '#image';
else if ($d == 3 && $h >= 19) $img = '#image';
else if ($d == 4 && $h < 0) $img = '#image';

// THURSDAY SCHEDULE
if ($d == 4 && $h >= 0 && $h < 5) $img = '#image';
else if ($d == 4 && $h >= 5 && $h < 9) $img = '#image';
else if ($d == 4 && $h >= 9 && $h < 14) $img = '#image';
else if ($d == 4 && $h >= 14 && $h < 19) $img = '#image';
else if ($d == 4 && $h >= 19) $img = '#image';
else if ($d == 5 && $h < 0) $img = '#image';

// FRIDAY SCHEDULE
if ($d == 5 && $h >= 0 && $h < 5) $img = '#image';				
else if ($d == 5 && $h >= 5 && $h < 9) $img = '#image';		
else if ($d == 5 && $h >= 9 && $h < 14) $img = '#image';		
else if ($d == 5 && $h >= 14 && $h < 19) $img = '#image';		
else if ($d == 5 && $h >= 19) $img = '#image';					
else if ($d == 6 && $h < 0) $img = '#image';					

// SATURDAY SCHEDULE
if ($d == 6 && $h >= 0 && $h < 5) $img = '#image';				
else if ($d == 6 && $h >= 6 && $h < 10) $img = '#image';	
else if ($d == 6 && $h >= 10 && $h < 14) $img = '#image';	
else if ($d == 6 && $h >= 14 && $h < 18) $img = '#image';			
else if ($d == 6 && $h >= 18 && $h < 20) $img = '#image';		
else if ($d == 6 && $h >= 20) $img = '#image';					
else if ($d == 0 && $h < 0) $img = '#image';						



echo'<div id="slide" ><img src="'.$img.'" style="border: 0px black" />
</div>
';
//<div style="float: left; width: 141px; height: 80px; margin-top: 10px; color: #FFFFFF; font-family: Tahoma; font-size: 15px;">'.$text.' <br \>'.$hora.'<br \>  '.$locutor.'</div>
//print "Hour of ";
//print $h;
//print "00 ";
//print " ";
//print $day;
//print " ";
//print $year;
// widget/script 2018 honeybun hf/swiftradioboy github
//charger is gay
?>