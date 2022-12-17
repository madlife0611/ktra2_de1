<?php
$mysqli=new mysqli('localhost','root','','ktra_de1');
if($mysqli -> connect_error){
    echo "Kết nối thất bại";
    exit();
}
?>