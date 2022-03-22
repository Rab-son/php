#replaces some characters with some other characters in a string
#signature: str_replace(find,replace,string,[count])
$ussdString = "123*9#3*4";
// replacing # with *
$newString = str_replace("#","*",$ussdString); 