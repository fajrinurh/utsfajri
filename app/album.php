<?php

namespace App;

class Album extends Koneksi {

    public function __construct()
    {
       parent::__construct();
    }
    public function tampil()
    {
       $sql = "SELECT * FROM album";
       $stmt = $this->db->prepare($sql);
       $stmt->execute();

       $data = [];
       while ($rows = $stmt->fetch()){
           $data[] = $rows;
       }
       return $data;
    }

    public function input()
    {
        $i_nama = $_POST['i_nama'];
        $i_text = $_POST['i_text'];

        $sql = "INSERT INTO album VALUES (NULL,  :album_nama, :album_text)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":album_nama", $i_nama);
        $stmt->bindParam(":album_text", $i_text);

        $stmt->execute();
    }
}