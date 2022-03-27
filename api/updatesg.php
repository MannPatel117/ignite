<?php
    session_start();
    include("connect.php");

    $uid = $_SESSION['id'];
    $update_status = mysqli_query($connect, "update users set squid=1 where id='$uid'");

    if($update_status){
        
        $_SESSION['squid'] = 1;
        echo '<script>
                    alert("Registration successfull!");
                    window.location = "/mwa/routes/dashboard.php";
                </script>';
    }
    else{
        echo '<script>
                    alert("Registration failed!.. Try again.");
                    window.location = "/mwa/routes/dashboard.php";
                </script>';
    }
    
?>