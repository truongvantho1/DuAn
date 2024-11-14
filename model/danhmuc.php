<?php
    function getall_dm(){
        $conn = connectdb();
        if ($conn === null) {
            return null; 
        }
        $stmt = $conn->prepare("SELECT * FROM danhmuc");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
?>