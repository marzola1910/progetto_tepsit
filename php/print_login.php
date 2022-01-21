<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $crypted_password= sha1($password)

    echo "email:". $email . "<br>";
    echo "password:". $password . "<br>";
    echo "crypted password:". $crypted_password;