<?php
    class Mahasiswa  {
    public $nim  ;
    public $nama ;
    public $jurusan ;
    
    function __construct($nim,$nama,$jurusan){
         $this->nim = $nim ;
         $this->nama = $nama ;
         $this->jurusan = $jurusan ;
    }
    function tampil_data(){
       echo $this->nim ;
       echo  $this->nama ;
        echo $this->jurusan;
    }
}
$Mahasiswa =new Mahasiswa ("666","alif","rpl"); 
$Mahasiswa ->tampil_data ();
?>