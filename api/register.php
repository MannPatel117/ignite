<?php
    include("connect.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    


    $insert = mysqli_query($connect, "insert into users ( name, email, pass, amongus, creatives, fifa, glowcricket, hackathon, iplauction, pitchit, squid, techexpo, techtrivia, thinktype, valo) values('$name', '$email', '$pass', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0) ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "/mwa/login.php";
                </script>';
        }
    
    
?>