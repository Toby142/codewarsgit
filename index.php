<?php
function betterThanAverage($classPoints, $yourPoints) {
 $average = (array_sum($classPoints) + $yourPoints) / (count($classPoints) + 1);
  if ($average < $yourPoints){
      return TRUE;
  }else{
      return FALSE;
  }
}
?>