<?php

$conn  = mysqli_connect("localhost:8080","root","root","php_dasar");

function registrasi($data){

    global $conn;


    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($data["password"]);
    $password2 = mysqli_real_escape_string($data["password2"]);


    // cek konfirmasi password 
    
    if( $password !== $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";

        return false;


    }
}


?>