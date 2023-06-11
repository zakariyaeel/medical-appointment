<?php


// Create connection
session_start();
$conn = mysqli_connect("localhost", "root", "", "center");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>