<?php 
    // static -> memanggil fungsi / property tanpa membuat objek sebelumnya
    require_once 'class_robot.php';
    require_once 'class_hewan.php';
    require_once 'class_orang.php';

    // $robot = new robot_hewan('ngik ngok', 20); // OLD
    // orang::bersuara(); // manggil static NEW
    echo orang::$suara;
    
?>