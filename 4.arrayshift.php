#Used to remove the first element from an array (returns the removed element)
$ussdString = "123*9*3*4";
$explodedString = explode("*",$ussdString);
var_dump($explodedString)