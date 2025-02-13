<?php 
    // Tidak perlu
    // require_once 'robot.php';
    // require_once 'hewan.php';
    // require_once 'orang.php';
    
    // autoload class
    // Untuk menambah require once otomatis

    spl_autoload_register(function ($class_name) {
       include $class_name . '.php';  
    });
    
    $robot = new robot('testing', 10);
    echo $robot->suara;
    
?>