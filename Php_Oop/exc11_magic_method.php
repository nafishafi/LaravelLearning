<?php 
    require_once 'robot.php';
    require_once 'hewan.php';
    require_once 'orang.php';
    
    // Magic method -> __toString(), __construct
    
    $robot = new robot('testing', 10);
    echo $robot;
    
?>