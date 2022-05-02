<?php
    $success = mysqli_connect('brighton.dreamhost.com', 'dh_t3hbtm', 'a6333a6333', 'shopping6333');

    if(!$success){
        echo 'Connection Error: ' . mysqli_connect_error(); 
    }
?>