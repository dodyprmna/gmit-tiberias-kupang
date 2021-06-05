<?php                           
    // include_once "koneksi.php";

	require "koneksi.php";

    $email = $_POST["email"];
    $userpassword = $_POST["password"];
    
    // /$email = "abdo@gmail.com"; $password = "123456";/
    $isValidEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if($con){
        if( $isValidEmail === false){
            echo "This Email is not valid";
        }else{
            $sqlCheckEmail = "SELECT password FROM jemaat WHERE email LIKE '$email'";
            $usernameQuery = mysqli_query($con,$sqlCheckEmail);
            list($password) = mysqli_fetch_array($usernameQuery);
            if(mysqli_num_rows($usernameQuery) > 0){
                // $sqlpass = "SELECT password FROM jemaat WHERE email LIKE '$email'";
                // $pass_query = mysqli_query($con,$sqlpass);
                // $pass_verif = password_verify("alex", mysqli_num_rows($pass_query));
                // $sqlLogin = "SELECT * FROM jemaat WHERE email LIKE '$email' AND password LIKE '$pass_verif'";
                // $loginQuery = mysqli_query($con,$sqlLogin);
                if(password_verify($userpassword, $password)){
                    echo "Login Success";
                }
                else{
                    echo "Wrong Password";
                }
            }else{
            echo "This Email is not registered";
            }
        }
    }
    else{
    echo "connection Error";
    }

?>