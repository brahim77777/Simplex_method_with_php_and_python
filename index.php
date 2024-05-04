<?php

function min_index($row) {
    $min = PHP_INT_MAX;
    $index = -1;
    
    for($i=0; $i<count($row); $i++) {
      if($row[$i] < $min && $row[$i] > 0) {
        $min = $row[$i];  
        $index = $i;
      }
    }
  
    return $index;
  }
// Coefficients 
$c = [1,2];
$A = [[3,1],[2,0]]; 
$b = [6,4];

// Initialize tableau
$tableau = array_merge($c, $A, [[0,0]]);  

// Simplex iterations
while(true) {

  // Find entering variable
  $p = min_index($tableau[0]);  

  // Find leaving variable 
  $q = min_ratio($tableau, $p);

  // Pivot  
  pivot($tableau, $p, $q);

  // Check optimality
  if($p == -1) break;

}

// Output optimal solution
echo "Optimal: ".$tableau[0];