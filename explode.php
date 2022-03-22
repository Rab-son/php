#A function that breaks a string into an array using a seperator
#signature:explode(seperator,string, [limit]) 

$ussdString = "123*9*3*4";
$explodedString = explode("*", $ $ussdString);
var_dump($explodedString) 