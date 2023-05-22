<?php
class Mahasiswa  {
    public $nama ="";
    public $email="";
    public $password="";
    
    function __construct($nama,$email,$password){
         $this->nama = $nama ;
         $this->email = $email;
         $this->password = $password ;
    }
    function tampilbiodata(){
       echo $this->nama ."<br />";
       echo  $this->email."<br />" ;
        echo $this->password."<br />";
    }
    function validasi(){
            if($this->nama==""){
                echo"nama kosong";            
            } 
            if($this->email==""){
                echo"nama kosong";
            } 
            if($this->password==""){
                echo"nama kosong";
            } 
            if($this->nama==""AND $this->password== ""AND $this->email==""){
                return false;
            }else{
                return true;
            }
    }
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];


$Mahasiswa = new Mahasiswa ($nama,$email,$password); 
 if($Mahasiswa->validasi()){
    $Mahasiswa->tampilbiodata();
 }   
?>