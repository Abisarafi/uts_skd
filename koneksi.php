<?php
$koneksi = mysqli_connect("localhost","root","","uts_skd");
//Check connection
if(mysqli_connect_error()){
    echo "Database connection error : ".mysqli_connect_error();
}
?>