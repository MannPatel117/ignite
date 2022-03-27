<?php
    session_start();
    include("connect.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];
  

    $check = mysqli_query($connect, "SELECT * from users where email='$email' and pass='$pass'");

    if(mysqli_num_rows($check)>0){
        
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['amongus'] = $data['amongus'];
        $_SESSION['creatives'] = $data['creatives'];
        $_SESSION['creatives'] = $data['creatives'];
        $_SESSION['fifa'] = $data['fifa'];
        $_SESSION['glowcricket'] = $data['glowcricket'];
        $_SESSION['hackathon'] = $data['hackathon'];
        $_SESSION['iplauction'] = $data['iplauction'];
        $_SESSION['pitchit'] = $data['pitchit'];
        $_SESSION['squid'] = $data['squid'];
        $_SESSION['techexpo'] = $data['techexpo'];
        $_SESSION['techtrivia'] = $data['techtrivia'];
        $_SESSION['thinktype'] = $data['thinktype'];
        $_SESSION['valo'] = $data['valo'];
        $_SESSION['data'] = $data;
        
        echo '<script>
                window.location = "/mwa/routes/dashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "/mwa/login.php";
            </script>';
    }
    
?>