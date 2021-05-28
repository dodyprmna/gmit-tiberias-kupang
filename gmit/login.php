<?php                           
    require "koneksi.php";                                                                                                                                  require "conn.php";
    $user = $_POST["user"];
    $password = $_POST["pass"];

    $isValidUser = $user;

    if($con){
        if( $isValidUser === false){
            echo "This User is not valid";
        } else{
            $sqlCheckUser = "SELECT * FROM registrasi_member WHERE username LIKE '$user'";
            $usernameQuery = mysqli_query($con,$sqlCheckUser);
            if(mysqli_num_rows($usernameQuery) > 0){
                $sqlLogin = "SELECT * FROM registrasi_member WHERE username LIKE '$user' AND password LIKE '$password'";
                $loginQuery = mysqli_query($con,$sqlLogin);
                if(mysqli_num_rows($loginQuery) > 0){
                    echo "Login Success";
                } else{
                    echo "Wrong Password";
                }
            } else{
                echo "This Email is not registered";
            }
        }
    }
    else{
    echo "Connection Error";

} ?>