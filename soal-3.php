<?php 
function bintang($kolom){
    for($x = 1;$x<=$kolom;$x++){
        if($x%2 == 0){
            $z = 0;
        }else{
            $z =1;
        }

        
        for($y = 1; $y <= $kolom;$y++){
            if($y%2 == $z){
                echo '*';
            }else{
                echo '&nbsp;&nbsp;&nbsp;';
            }
        }
        echo '<br/>';
    }
}

bintang(5);

?>