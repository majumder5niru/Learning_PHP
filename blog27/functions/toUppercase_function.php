<?php
function toUpperCase($string){
    $string_length=strlen($string);
    $upper_string="";
    for($i=0;$i<$string_length;$i++) {
        if (ord($string[$i]) >= ord('a') && ord($string[$i]) <= ord('z')) {
            $upper_string = $upper_string . chr(ord($string[$i]) - ord('a') + ord('A'));
        }
        else
            $upper_string = $upper_string. $string[$i];
    }
        return $upper_string;
}
?>