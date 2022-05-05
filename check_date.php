    <?php

    require_once("db_connect.php");
    require_once("db.php");
    require_once("workerslist.php");

    $date =  $_POST["date"];
    $flag = 0;
 

    if (empty($date)){
        echo '<script>alert("Error has occured, please try again")</script>';
        $flag = $flag + 1;
    }

/*
    $user_check_query = "SELECT * FROM customertb WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($success, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
      if ($user['username'] === $username) {
        echo '<script>alert("Username is taken")</script>';
        $flag = $flag + 1;
      }
*/

    if($flag < 1){
        echo'<h1> Workers available on '. $date .'</h1>';


        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
            if($row['appointment_date'] == 'date'){
            workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
        }
    }


        exit;

    }else{
        echo "<script> location.href='date.php'; </script>";
        exit;
    }