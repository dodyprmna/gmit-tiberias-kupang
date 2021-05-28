<?php
 
    //Mendefinisikan Konstanta
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','heroku_6e5e46fdc42c001');
    
    //membuat koneksi dengan database
    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

    header('Content-Type: application/json');

 ?>