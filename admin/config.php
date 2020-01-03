<?php
$host='localhost';
$user='root';
$pass='';
$database='farmhub';

$koneksi=mysqli_connect($host, $user, $pass, $database);

mysqli_select_db($koneksi, $database);
if ($koneksi){
echo "success";
} else {
echo "failure";
}

?>