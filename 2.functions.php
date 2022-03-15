#defined functions
#inbuilt functions

<?php

    #call
    $months = convertToMonths(2);
    
    echo $months;

    #definition
    function convertToMonths ($years){
        return $years*12;
    }


?>