<?php
    $name=$_POST['name'];
    $email=$_POST['email']
    $subject=$_POST['subject']
    $conn = new mysql('localhost','root','');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into contacts(name,email,subject)values($name,$email,$subject)");
        $stmt->bind_param("sss",$name,$email,$subject);
        $stmt->execute();
        echo ("registration successful..");
        $stmt->close();
        $conn->close();
    }








?>