<?php
$host = 'db4free.net:3306'; 
$dbuser = "yosepsmjtk";
$dbpassword = "fe6dda13";
$dbname = "bookingbola";

$koneksi = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
    if(!($koneksi)){
        echo "<script language=\"javascript\">\n";
        echo "alert(\"Tidak bisa terkoneksi dengan database...\");\n";
        echo "</script>";
        die;
    }else{
        $select = mysqli_select_db($koneksi, "bookingbola");
        //echo "Sukses";
    }
?>
