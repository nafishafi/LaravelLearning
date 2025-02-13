<?php 
    require_once 'class_robot.php';
    require_once 'class_hewan.php';
    require_once 'class_orang.php';
    
    // Magic method -> __toString(), __construct
    
    $robot = new robot('testing', 10);
    echo $robot;
    
?>