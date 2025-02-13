<?php 
    require_once 'robot.php';
    require_once 'hewan.php';
    
    $robot1 = new robot('ngik ngik ngok', 20);
    $robot1->set_berat(50);
    
    echo 'beratnya.. ' . $robot1->get_berat() . '<br>';
    
    $robothewan = new robot_hewan('huam', 100);
    echo $robothewan->get_kekuatan();
?>