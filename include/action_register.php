<?php
include_once 'db_connect_user.php';

$name = $_POST["Name"];
$surname = $_POST["Surname"];
$email= $_POST["Email"];
$password = $_POST["Pass"];
$password = md5($haslo);

$sql = "INSERT INTO user (id, imie, nazwisko, email, haslo)
VALUES (NULL, '$name', '$surname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../login.php");