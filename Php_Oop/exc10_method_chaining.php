<?php 
    require_once 'class_robot.php';
    require_once 'class_hewan.php';
    require_once 'class_orang.php';
    
    // Method Chaining -> cara kita menyambungkan satu metode ke metode lain / cara memanggil beberapa metode sekaligus 
    
    $robot = new robot('testing', 10);
    
    // $robot->set_suara("okey dokey");
    // $robot->set_berat(15);

    // Chaining
    $robot -> set_suara('okey dokey')->set_berat(15); // harus menggunakan return this pada fungsi

    echo $robot->suara . '-' . $robot->berat;
    
?>