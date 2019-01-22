<?php 

function abjad($kolom,$baris){
    $i=0;
    $char = ["A","B","C","D","E","F","G","H","I","J","K","L","M","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    for($x = 0; $x<$baris;$x++){
        for($y=0; $y< $kolom;$y++){
            echo $char[$i].'&nbsp;&nbsp;';
            $i++;
        }
        echo '<br/>';
    }
}
abjad(3,4);

?>