function my_function($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values appropriately
  } elseif ($a > $b) {
    return $a;
  } else {
    return $b;
  }
}

$result = my_function(10, 5);
echo $result; // Outputs 10

$result = my_function(5, 10);
echo $result; // Outputs 10

$result = my_function(null, 5);
echo $result; //Outputs null

$result = my_function(5, null);
echo $result; //Outputs null