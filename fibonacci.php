<?php

// Declare the variable
$nFirstNo = 0;
$nSecondNo = 1;
$nEvenNo = 0;
$nSum = 1;
// END 

// Loop the sum until it reached 4000000
while ($nSum <= 4000000) {
	//Sum the firstNo and secondNo
	$nSum = $nFirstNo + $nSecondNo;
	// END 
	
	// Assign the secondNo to firstNo 
	$nFirstNo = $nSecondNo;
	// END 
	
	// Then, sum will become the secondNo to be added on the next loop 
	$nSecondNo = $nSum;
	// END 
	
	// Find whether the sum is even or odd
	if ($nSum % 2 == 0) {
	  $nEvenNo += $nSum;
	}
	// END
	
	
}
// Echo the end result 
echo"<li>".$nEvenNo;
// END

?>