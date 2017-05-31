<?php
 
try {     
    require_once '../app/init.php';
    $app = new App;
}

//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}
?>
