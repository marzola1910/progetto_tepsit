<?php

    $typology_user=$_POST['typology_user'];
    $name = $ POST['name'];
    $surname = $ POST['surname'];
    $address = $ POST['address'];
    $CAP = $ POSTI ['CAP'];
    $country = $_ POST[' country'];
    $province = $ POST['province'];
    $phone = $_POST[ 'phone'];
    $birth of date = $ POST['birth of date'];
    $fiscal code = $ POST['fiscal code'];
    $email = $ POST['email'];
    $password = $ POST[' password'];
    $crypted _password = sha1 ($password);
    $confirm password = $ POST[' confirm password'];
    $confirm crypted password = sha1 ($confirm_password);

    echo "Typology_user:" .$typology_user . "<br>";
    echo "name:" .$name . "<br>";
    echo "surname:" .$surname . "<br>";
    echo "address:" .$address . "<br>";
    echo "CAP:" .$CAP . "<br>";
    echo "country:" .$country . "<br>";
    echo "province:" .$province . "<br>";
    echo "phone:" .$phone . "<br>";
    echo "birth of date:" .$birth_of_data . "<br>";
    echo "fiscal code:" .$fiscal_code . "<br>";
    echo "password:" .$password . "<br>";
    echo "password crypted:" .$password_crypted . "<br>";
    echo "confirm password:" .$confirm_password . "<br>";
    echo "confirm password crypted  :" .$confirm_password_crypted . "<br>";
   
    