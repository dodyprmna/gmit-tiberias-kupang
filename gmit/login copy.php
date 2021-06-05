<?php                           
    // Memulai session.
    session_start();

    // Jika ditemukan session, maka user akan otomatis dialihkan ke halaman admin.
    if (isset($_SESSION['username'])) {
        header("location: admin.php");
    }

    // Include koneksi database.
    require_once "connect.php";

    // Jika tombol login ditekan, maka akan mengirimkan variabel yang berisi username dan password.
    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $userpass = $_POST['password']; // password yang di inputkan oleh user lewat form login.

        // Query ke database.
        $sql = mysqli_query($connect_db, "SELECT username, password, nama FROM login WHERE username = '$username'");

        list($username, $password, $nama) = mysqli_fetch_array($sql);

        // Jika data ditemukan dalam database, maka akan melakukan validasi dengan password_verify.
        if (mysqli_num_rows($sql) > 0) {

            /*
                Validasi login dengan password_verify
                $userpass -----> diambil dari password yang diinputkan user lewat form login
                $password -----> diambil dari password dalam database
            */
            if (password_verify($userpass, $password)) {

                // Buat session baru.
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['nama']     = $nama;

                // Jika login berhasil, user akan diarahkan ke halaman admin.
                header("location: admin.php");
                die();
            } else {
                echo '<script language="javascript">
                        window.alert("LOGIN GAGAL! Silakan coba lagi");
                        window.location.href="./";
                    </script>';
            }
        } else {
        echo '<script language="javascript">
                    window.alert("LOGIN GAGAL! Silakan coba lagi");
                    window.location.href="./";
                </script>';
        }
    }

?>