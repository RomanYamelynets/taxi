<?php
$server = 'localhost'; 
$user = 'root'; 
$password = 'root'; 
$db = 'taxi'; 
 
$db = mysqli_connect($server, $user, $password, $db); 

if (!$db) {
    
    echo "�� ������� ������������ � ������� ���� ������!"; 
    exit;
}
?>