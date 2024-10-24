<?php

include 'connect.php';
if(isset($_POST['signUp'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From users1 where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Already Exists !";
    }
    else{
        $insertQuery="INSERT INTO  users1(name,dob,contact,email,password)
        VALUES('$name','$dob','$contact','$email','$password')";

        if($conn->query($insertQuery)==TRUE){
            header("location: index.php");
        }
        else{
            echo "Error:".$conn->error;
        }
    }

}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users1 WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location:homepage.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}

?>