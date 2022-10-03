<?php
require_once 'Person.php';
class Dosen extends Person{
    //member1 variabel
    public $nidn;
    public $gelar;
    //member2 constructor
    public function  __construct($nama,$gender,$nidn,$gelar){
        parent::__construct($nama,$gender);
        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }
    public function mencetak(){
        parent::mencetak();
        echo '<br/>NIDN: '.$this->nidn;
        echo '<br/>Gelar: '.$this->gelar;
        echo '<hr/>'; 
    }
}