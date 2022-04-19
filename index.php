<?php

function solution($N) {
    // range, length, loop, array, convert from binary to decimal

    if(is_integer($N) && ($N>=1 && $N<= 2147483647) ){

   
	 $binary = decbin($N);
	 $length = strlen($binary);
	 $hasone = false;
	 $zeros = 0;
	 $gaps = [];

for($i=0; $i<$length; $i++){
	if($binary[$i] == 1){

	if(!$hasone){
		$hasone = true;
		continue;
	}

	$gaps[] = $zeros;
	$zeros = 0;
	continue;

	}

$zeros++;

}

}

return (empty($gaps) ? 0 : max($gaps));
}

//echo solution(1001) 2;

//echo solution(20) 1;

//echo solution(529);

echo solution(1041);



?>
