<?php
function toLowerCase($string){
    $string_length=strlen($string);
    $lower_string="";
    for($i=0;$i<$string_length;$i++) {
        if (ord($string[$i]) >= ord('A') && ord($string[$i]) <= ord('Z')){
            $lower_string = $lower_string . chr(ord($string[$i]) + ord('a') - ord('A'));
        }
        else
            $lower_string = $lower_string. $string[$i];
    }
    return $lower_string;
}
?>