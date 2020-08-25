<?php

session_start();


$conn = mysqli_connect(
    'localhost',
    'root',
    'toor',
    'apo_software'
);

if (isset($conn)) {
    echo 'DB is connectected';
}
?>