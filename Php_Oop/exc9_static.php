<?php 
    // static -> memanggil fungsi / property tanpa membuat objek sebelumnya
    require_once 'robot.php';
    require_once 'hewan.php';
    require_once 'orang.php';

    // $robot = new robot_hewan('ngik ngok', 20); // OLD
    // orang::bersuara(); // manggil static NEW
    echo orang::$suara;
    
?>