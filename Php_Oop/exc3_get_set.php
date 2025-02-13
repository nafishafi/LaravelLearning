<?php 
    // class
    class robot{
        //property
        public $suara;
        public $berat;

        //metode set (mengoper parameter dan mengubah nilai dari property) && metode get
        public function set_suara($suara1){ // set setting
            $this->suara = $suara1;
        }

        //method
        public function get_suara(){ // get mengambil
            return $this->suara;
        }
    }
    $robot1 = new robot;
    $robot2 = new robot;
    
    $robot1->set_suara('ngik ngik ngok');
    echo 'bunyinya.. ' . $robot1->get_suara();
    
    $robot2->set_suara('robot 2 ngik');
    echo '<br>bunyinya.. ' . $robot2->get_suara();
?>