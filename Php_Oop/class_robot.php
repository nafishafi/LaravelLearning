<?php 
    // class
    class robot{
        //property
        public $suara;
        public $berat;

        //konstruktor
        public function __construct($suara, $berat)
        {
            $this->suara = $suara;
            $this->berat = $berat;
        }

        //metode set (mengoper parameter dan mengubah nilai dari property) && metode get
        public function set_suara($suara1){ // set setting
            $this->suara = $suara1;
            return $this;
        }
        public function set_berat($berat1){ // set setting
            $this->berat = $berat1;
        }

        //method
        public function get_suara(){ // get mengambil
            return $this->suara;
        }
        public function get_berat(){ // get mengambil
            return $this->berat;
        }
    }

?>