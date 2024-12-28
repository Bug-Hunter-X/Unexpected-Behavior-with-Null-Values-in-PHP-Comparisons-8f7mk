function my_function($a, $b) {
  if ($a > $b) {
    return $a;
  } else {
    return $b; 
  }
}

$result = my_function(10, 5);
echo $result; // Outputs 10

$result = my_function(5,10);
echo $result; // Outputs 10

$result = my_function(null, 5); //This will cause a warning
echo $result; //Outputs 5

$result = my_function(5, null); //This will cause a warning
echo $result; //Outputs 5