<?php
class Data {
    public function __construct(){
        $server="localhost";
        $user="user";
        $pass="12345678";
    
        try {
            $this->conn = new PDO("mysql:host=$server;dbname=latihan_get",$user,$pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed".$e->getMessage();
        }
    }
    public function read_get(){
        $sql="SELECT * FROM latihanget;";
        $stm=$this->conn->prepare($sql);
        $stm->execute();

        $result=$stm->fetchALL(pdo::FETCH_ASSOC);
        return $result;
    }
    public function read_post(){
        $sql="SELECT * FROM latihanpost;";
        $stm=$this->conn->prepare($sql);
        $stm->execute();

        $result=$stm->fetchALL(pdo::FETCH_ASSOC);
        return $result;
    }
    public function insert_get($nama,$jumlah,$harga){
        $sql="INSERT INTO latihanget(barang,jumlah,harga) VALUES ('".$nama."','$jumlah','$harga');";
        $stm=$this->conn->prepare($sql);
        $stm->execute();
    }
    public function insert_post($kurir,$pengirim,$asal,$tujuan){
        $sql="INSERT INTO latihanpost(kurir,pengirim,asal,tujuan) VALUES ('".$kurir."','".$pengirim."','".$asal."','".$tujuan."');";
        $stm=$this->conn->prepare($sql);
        $stm->execute();
    }
}
// $program= new Data;
// $program->read();


?>