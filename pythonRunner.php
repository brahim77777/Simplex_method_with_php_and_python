<?php

// index.php

// Command to execute Python script
$command = 'python3 simple.py '.escapeshellarg("max 3 2 3,-4,-1,L,-2 1,3,1,L,9 10,-8,-6,0");

// Execute command
$output = exec($command);

$arr = json_decode($output, true);
// Output result
echo "Result from Python: " . $output;

echo "<pre>";
print_r($arr);
echo "</pre>";

echo $arr['max'];