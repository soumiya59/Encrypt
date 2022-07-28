<?php
define('DB_HOST','sql308.epizy.com');
define('DB_USER','epiz_32260412');
define('DB_PASSWORD','9r8sjtGR9adbb');
define('DB_NAME','epiz_32260412_cryptography');

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($conn->connect_error){
    die('connection failde' . $conn->connect_error);
}
?>




