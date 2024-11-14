<?php

    function checkuser($gmail, $address,$user,$pass){
        $conn = connectdb();
        if ($conn === null) {
            return null; 
        }
        $stmt = $conn->prepare("SELECT * FROM login WHERE user = :user AND pass = :pass AND gmail = :gmail AND address = :address" );
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $pass);
        $stmt->bindParam(':gmail', $gmail);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq[0]['role'];
    }
    function saveUser($gmail, $address, $user, $pass) {
        $conn = connectdb();
        if ($conn === null) {
            return false;
        }
    
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (gmail, address, username, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->execute([$gmail, $address, $user, $hashedPassword]);
            return $stmt->rowCount() > 0;
        }
        return false;
    }
?>