<?php
$connection = mysqli_connect('LOCALHOST', 'adarshcs615', 'Aadhi123');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'adarshcs615');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
  ?>