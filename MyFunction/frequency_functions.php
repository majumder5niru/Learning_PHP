 <?php
function frequencyFunction($sentence)
{
    $len = strlen($sentence);
    $freq = array();
    
    for($i=0;$i<$len;$i++){
        if(array_key_exists($sentence[$i],$freq)){
            $freq[$sentence[$i]]++;
        }
        else {
            $freq[$sentence[$i]] = 1;
        }
    }
    return $freq;
}
   
?>