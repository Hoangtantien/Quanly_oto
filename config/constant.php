<?php
if(!isset($_SESSION)){
    session_start();

}
$conn = mysqli_connect('localhost','root','12345678','car');
if(!$conn){
    die('Cant connect');
}

?>