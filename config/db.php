<?php
$host = 'bcfxa9izmbe68thefrqb-mysql.services.clever-cloud.com';
$user = 'uqctyfrcyircvdoy';
$pass = '1ewvuWBoGA14d2WNlbfj';
$port = '3306';
$db_name = 'bcfxa9izmbe68thefrqb';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>