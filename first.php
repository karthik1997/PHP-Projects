<?php
function ifAllElseFails($type, $msg, $file, $line, $context) {
   echo ( "Ah what the hell. Doesn't work. But the meaning of life is 42. And chickens or eggs? Nah. It was a mutant gecko." );
}
error_reporting(E_ALL);
set_error_handler("ifAllElseFails");

class TheMeaningOfLif {
     var $came_first;
	 var $the_answer;
	 var $aeons;
	 var $doubt;
	 var $uncertainty;
	
	 function TheMeaningOfLif() {
		  $this->aeons = "150";
		  $this->doubt = ceil ( 13.3 * $this->Life() );
		  $this->uncertainty = floor ( 132 / $this->theUniverse() );
		  $this->the_answer[whatisthemeaning] = $this->andEverything();
		  $this->came_first = array ( "The Chicken", "The Egg" );  	
          $this->came_first = arsort ( $this->came_first, SORT_NUMERIC );		
		  $this->the_answer[whichcamefirst] = whichCameFirst($this->came_first);
     }
	 function Life () {
        for ($x = 1; $x <= $this->aeons; $x++) {
            $r = 1 / ($x * $x);
            $s += $r;
        }
        $var = sqrt(6 * $s);
		return ( $var );		
	 }
	 function theUniverse () {
        $dw   = 1;
        $l    = 1;
        $up   = 2;
        $var  = 4;
        for ($x = 2; $x <= $var; $x++) {
            $l++;
            if ($l % 2 != 0)
                $up = $x + 1;
            elseif ($l % 2 == 0)
                $dw += 2;
            $var = $var * ($up/$dw);

            if ($l == 4)
                $l = 0;
        }
		return ( $var );
     }	
	 function andEverything () {
        $carry = $this->doubt & $this->uncertainty;
        do {
           $carry = $carry << 1;
           $num1  = $this->doubt ^ $this->uncertainty;
           $sum   = $this->doubt ^ $carry;
           $num2  = $carry;
           $carry = $this->doubt & $this->uncertainty;
        } while($carry != 0);
		return ( $carry );
	 }
     function whichCameFirst(&$arr) {
        function reverse_splice(&$splice, $i1, $i2) {
          if($i1>$i2) {
		    $swp = $i1; $i1 = $i2; $i2 = $swp;
		  }
          for($k=$i2;$k>=$i1;$k--){
		    $tmpArr[] = $splice[$k];
		  }
          for($k=0;$k<count($tmpArr);$k++) {
		    $splice[$i1+$k] = $tmpArr[$k];
		  }
        }
        $i = count($arr);
        mt_srand((double)microtime()*1000000);
        while($i>0) {
          --$i;
          $j = @mt_rand(0, $i);
          if($i!=$j) {
            reverse_splice($arr, $i, $j);
          }
        }
     }	 	 	
	 function theGuruSays () {
	 	  return ( $this->the_answer );
	 }	 	
}
$TheMeaningOfLif = new TheMeaningOfLif;
$the_answer = $TheMeaningOfLif->theGuruSays();
$var = $$the_answer[0];
$var = $$the_answer[1];
echo ( "The meaning of life is " . $whatisthemeaning . "<br>");
echo ( "Which came first? " . $whichcamefirst . " of course!");
?>
