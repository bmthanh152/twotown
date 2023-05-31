<?php 
    ob_start();
    session_start();
    include "./assets/db/config.php";
    // if(isset($_SESSION["email"])) {
    //     header("Location: index.php");
    // }

    if (isset($_POST['login'])) {
        // SQL injection
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hashpassword = md5($password);
        $result1 = mysqli_query($conn, "SELECT * FROM users WHERE Email = '" . $email. "'");
        $result2 = mysqli_query($conn, "SELECT * FROM users WHERE MatKhau = '" .$hashpassword. "'");
        $emailAdmin = "admin";
        $passAdmin = "bmt010502";
        if (!$row = mysqli_fetch_array($result1)) {
            $error_message = "<p style='color:#B73239; font-weight: 700; font-size: 12pt;'>Sai email. Vui lòng nhập lại!</p>";    

        } 
        else if(!$row = mysqli_fetch_array($result2)) {
            $error_message = "<p style='color:#B73239; font-weight: 700; font-size: 12pt;'>Sai mật khẩu !!!</p>";
        }
        else {
            if(isset($_POST['item'])=="yes"){
                $path="/";
                $expire=time()+3600;
                //setcookie("checkstatus","yes",$expire,$path);
                setcookie("email",$email,$expire,$path);
            }
            $_SESSION['email'] = $_POST['email'];	
            $_SESSION['password'] = $_POST['password'];		
            $sql = "SELECT * FROM users Where email = '$email'";	
            header("Location: index.php");
        }

        if ($_POST['email'] == $emailAdmin && $_POST['password'] ==  $passAdmin){
            $_SESSION['emailAdmin'] = $emailAdmin;
            header("Location: ./admin/index.php");
        }
    }

?>