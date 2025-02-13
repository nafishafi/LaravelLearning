<?php 
    require_once 'robot.php';
    require_once 'hewan.php';
    require_once 'orang.php';
    
    // Method Chaining -> cara kita menyambungkan satu metode ke metode lain / cara memanggil beberapa metode sekaligus 
    
    $robot = new robot('testing', 10);
    
    // $robot->set_suara("okey dokey");
    // $robot->set_berat(15);

    // Chaining
    $robot -> set_suara('okey dokey')->set_berat(15); // harus menggunakan return this pada fungsi

    echo $robot->suara . '-' . $robot->berat;
    
?>