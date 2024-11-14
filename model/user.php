<?php

    function check($user,$pass){
        $conn = connectdb();
        if ($conn === null) {
            return null; 
        }
        $stmt = $conn->prepare("SELECT * FROM login WHERE user = :user AND pass = :pass");
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        $kq = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        if(count($kq)>0) return $kq[0]['role'];
        else return 0;
    }
    function checkuser($user, $pass) {
        // Assuming you have a database connection set up
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM login WHERE user = ? AND pass = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); // Return user details
    }
    function checkinfo($user,$pass){
        $conn = connectdb();
        if ($conn === null) {
            return null; 
        }
        $stmt = $conn->prepare("SELECT * FROM login WHERE user = :user AND pass = :pass");
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        $kq = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>