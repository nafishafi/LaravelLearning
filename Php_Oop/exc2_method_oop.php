<?php 
    // class
    class robot{
        //property
        public $suara = 'ngik ngik ';
        public $berat = 30;

        //method
        public function bersuara(){
            echo 'suara robotnya....' . $this->suara; // memakai this jika 1 scope
        }

        public function berat_robot(){
            return $this->berat;
        }
    }
    $robot1 = new robot;
    $robot1->bersuara();
    echo $robot1->berat_robot();
    
?>