<?php 
    // public, protected(hanya bisa diakses kelas yang diwarisi), private(hanya bisa diakses kelas nya sendiri)
    require_once 'robot.php';
    require_once 'hewan.php';

    $robot = new robot_hewan('ngik ngok', 20);
    echo $robot->testing();
    
?>