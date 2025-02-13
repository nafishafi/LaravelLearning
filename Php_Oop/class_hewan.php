<?php
    require_once 'class_robot.php';
    // inheritence
    class robot_hewan extends robot{
        public function get_kekuatan(){
            echo ' saya hewan laut bisa berenang...';
        }
        // overriding -> menggunakan nama fungsi yang sama tapi diubah isi atau kontennya
        public function get_suara(){ // get mengambil
            return 'suaranya adalah...' . $this->suara;
        }
    }
?>