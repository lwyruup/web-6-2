<?php 
function connectToDB($user,$pass){
    $db = new PDO('mysql:host=localhost;dbname=u67430', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    return $db;
}
function connectDB(){
    $user = 'u67430';
    $pass = '1435651';
    $db = new PDO('mysql:host=localhost;dbname=u67430', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    return $db;
}
?>
