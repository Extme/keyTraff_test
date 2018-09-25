<?php

include_once ('Inquery.php');

if ($_POST['query']=='inquery0'){
    $inquery = Inquery::inquery0();
    print (json_encode($inquery));
    
}

elseif ($_POST['query']=='inquery1'){
    $inquery = Inquery::inquery1();
    print (json_encode($inquery)); 
}


?>
