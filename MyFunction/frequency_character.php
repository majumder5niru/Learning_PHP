<?php

include "frequency_functions.php";
$frequency = array();
if(isset($_GET["sentence"])) 
{
    $sentence = $_GET["sentence"];
    
    $frequency = frequencyFunction($sentence);
}
?>


<html>
<head>
    <style>
        .colorChange{ background-color }
    </style>
</head>   
<body>
   <form action="frequency_character.php" method="get">   
        <table border="1">
            <?php
                if(!empty($frequency))           
                {
                    echo "<tr><th>Alphabet</th><th>Number of Occurences</th></tr>";
                    foreach($frequency as $freq=>$value)
                    {
                        if($value > 5)
                        {
                             echo "<tr><td>$freq</td><td style=\"background-color:green\">$value</td></tr>";
                        }
                        else
                        {
                             echo "<tr><td>$freq</td><td>$value</td></tr>";
                        }
                    }
                }  
                else
                {
                     echo "Sentence: <input type=\"text\" name=\"sentence\">";
                }
            ?>
        </table>
        
        <button type="submit">Submit</button>
   </form>
</body>
</html>