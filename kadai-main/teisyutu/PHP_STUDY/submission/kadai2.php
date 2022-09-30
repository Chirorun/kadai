<?php
for ($num = 1; $num < 101; $num++){
    echo "$num ";
    if($num%10==0)
    echo "\n";
}
?>





<?php
for($i=0; $i<10; $i++){
    for($j=0; $j<10; $j++){
        if($i!=0)
        echo $i;
        echo $j;
        echo "\t";
        if($j==9)
        echo "\n";
    }
}    
?>