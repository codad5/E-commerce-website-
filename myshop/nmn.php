<?php

// echo date("d:m:y")." ";

// $d=strtotime("10:30pm April 15 2024");
// echo  date("Y-m-d h:i:sa", $d)." ";
// // echo date("d:m:y") - $d;

// var_dump($d); 
// var_dump(date("Y-m-d h:i:sa", $d)); 

function checkExpired($date, bool $bolean) {

	

    
    # code...
    // var_dump($_GET['time']);
	$d=strtotime($date);
		// echo  date("Y-m-d", $d)."<br> ";
		// echo date("Y-m-d");

	if (!empty($date)) {
	    # code...
	    if(date("Y", $d) < date("Y")){
	    return !$bolean;
	        exit();
	    
	}
	else if(date("Y", $d) === date("Y")) {

	    if (date("m", $d) < date("m")) {
	        # code...
	        return !$bolean;

	        
	    

	    }
	    else if (date("m", $d) === date("m")){

	    if (date("d", $d) < date("d")) {
	        # code...
	        return !$bolean;

	    


	    }
	    else {

	        return $bolean;


		    
		}

		    
		}
		else{
		        return $bolean;


		}

		    
		}
		else{
		        return $bolean;

		}
		}
}

function futureDate($hrs, $days, $month, $year){
	
	$cYear = date("Y");
	$cMonth = date("m");
	$cDay = date("d");
	$cHour = date("H");
	$nDay = 0;
	$nMonth = 0;
	$nYear = 0;



	$noDays = $hrs / 24 ;
	$noMonth = $noDays / 30;
	$noYears = $noMonth / 12;
	
	$nYear = $cYear + $noYears;

	if ($noMonth > 12) {
		# code...
		$re =  $noMonth % 12;
		
		


		$nMonth = $re;
		
	}
	else{
		$nMonth = $cMonth + $noMonth;
	}

	if ($noDays > 30) {
		# code...
		$re =  $noDays % 12;
		
		


		$nDay = $re;
		
	}
	else{
		$nDay = $cDay + $noDays;
	}

		$nMonth = ceil($nMonth);
		$nDay = ceil($nDay);
		$nYear = ceil($nYear);
		$fd = mktime(00, 00, 00, $nMonth, $nDay, $nYear);

	    $futureDate = date("Y-m-d", $fd);

	return $futureDate;

	




}
$y = mktime(3000, 0, 0, 0, 0, 0);
$y = strtotime($y);
echo "This is the possible time to stop::".$y."<br>".date("Y");
// echo checkExpired($_GET['time']);

// echo checkDate(10, 7, 2021);

if (checkExpired($_GET['time'], "hello")) {
	# code...
	echo "This Still Valid";
	
	
}
else{
	echo "This has expired";
	

}


?>


<br>

<form action="" method="get">
    <input type="date" name="time" id="">
    <input type="submit" value="Submit">
</form>

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks",$startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate),"<br>";
  $startdate = strtotime("+1 day", $startdate);
}
?>
