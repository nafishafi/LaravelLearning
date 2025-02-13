<?php 
    require_once 'class_robot.php';
    require_once 'class_hewan.php';
    require_once 'class_orang.php';
    
    // Abstract class -> kelas yang mengandung minimal 1 metode abstract
    // Kelas utama yangnantinya akan diwariskan ke kelas lain
    // Tidak mengisi nilai dari fungsinya
    // Biasanya diapakai untuk acuan pertama dalam menulis program
    // Ketika bekerja dalam tim sudah membuat blueprint/sketsa
    // Jika abstaract protected maka dibawahnya harus sama, tetapi tidak boleh private
    
    $robot = new robot('testing', 10);
    echo $robot;
    
?>