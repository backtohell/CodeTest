<?php
class BasicCode{
	
	/**
	 * 
	 * Function to check the prime no
	 * @param $number
	 */
	public function IsPrimeNo($number){
		for($a=1;$a<=$number;$a++){
		if($number%$a==0){
			$count++;
		    }
		}
		if($count==2){
			return "Prime no";
		}else{
		    return "Not a prime no";
		}
	}
	
	/**
	 * Function to print Series of the perfect no
	 */
	public function PrintPerfectNoSeries($number){
		$i		= 1; 
		$u		= 1;
		$sum	= 0;
		while($i<=$number){
			while($u<=500){
				if($u<$i){
	      			if($i%$u == 0)
	      				$sum	= $sum+$u;
				}
	     	 $u++;
			}
		   if($sum==$i){
		    echo $i." is a perfect number.<br/>";
		   }
	   		$i++;
	   		$u	= 1;
	   		$sum	= 0;
		}   
	}
	
	/**
	 * Function to find the binary no
	 */
	public function GetBinaryNo($number){
		$n=$number;
		for( $a=1;$n!=0;$a++){
     		$n=$n/2;
		}
		$a	= $a-2;
  		for ($c = $a; $c >= 0; $c--){
    		$k = $x >> $c;
    	if ($k & 1)
      		return "1";
    	else
      		return "0";
  		}
	}
	/**
	 * 
	 * Print a dismond shape...
	 * @param unknown_type $size 
	 */
	public function displayDiamond($size){
		$z	= 1;
		$rtnMessage	= '';
  		for ( $i=0; $i<=$size; $i++){
    		for ($j=$size; $j>$i; $j--){
      			$rtnMessage += " ";
    		}
		    $rtnMessage += "*"; 
    		if ( $i>0){
      			for ( $k=1; $k<=$z; $k++){
        			$rtnMessage += " ";
      			}
      		$z+=2;
      		$rtnMessage  += "*";
    		}
    		$rtnMessage += endl;
  		}
	  $z-=4;
	  for ($i=0; $i<=$size-1; $i++){
    	for ($j=0; $j<=i; $j++){
      		$rtnMessage += " ";
    	}
    	$rtnMessage += "*";
		for ($k=1; $k<=$z; $k++){
      		$rtnMessage += " ";
		}
    	$z-=2;
	    if ($i!=$size-1){
      		$rtnMessage += "*";
	    }
    	$rtnMessage += endl;
	  }
	  return $rtnMessage;
	}
}

try {
	$BasicCodeObj	= new BasicCode();
	if(isset($_POST) && !empty($_POST)){
		switch ($_POST['function']){
			case 'IsPrimeNo':
				$val	= $_POST['value'];
				echo $BasicCodeObj->IsPrimeNo($val);
			break;
			case 'PerfectNoSeries':
				$val	= $_POST['value'];
				echo $BasicCodeObj->PrintPerfectNoSeries($val);
			break;
			case 'GetBinary':
				$val	= $_POST['value'];
				echo $BasicCodeObj->GetBinaryNo($val);
			break;
			case 'PrintDiamond':
				$val	= $_POST['value'];
				echo $BasicCodeObj->displayDiamond($val);
			break;
		}
	}	
}catch (Exception $e){
	echo "Error is $e";
}
