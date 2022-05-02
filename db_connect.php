<?php
    $success = mysqli_connect('https://west1-phpmyadmin.dreamhost.com/', 'shopping6333', '123456789', 'shopping6333');

    if(!$success){
        echo 'Connection Error: ' . mysqli_connect_error(); 
    }
?>