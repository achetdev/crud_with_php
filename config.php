<?php
// innitialize the variables for connection
$host = 'localhost';
$user = 'root';
$password = '39113977';
$dbs = 'tutarial_connect_dbs';

// connection
$conn = mysqli_connect($host, $user, $password, $dbs);
if (!$conn) {
    echo mysqli_connect_error();
}
