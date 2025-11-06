<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['text_field'];
  $password = $_POST['password_field'];
  $email = $_POST['email_field'];
  $phone = $_POST['phone_field'];
  $gender = $_POST['gender_field'];
  $dob = $_POST['dob_field'];
  $address = $_POST['address_field'];
  $website = $_POST['url_field'];
  $search = $_POST['search_field'];
  $number = $_POST['number_field'];
  $range = $_POST['range_field'];
  $color = $_POST['color_field'];
  $time = $_POST['time_field'];
  $month = $_POST['month_field'];
  $week = $_POST['week_field'];
  $file_name = $_FILES['file_field']['name'];

  $sql = "INSERT INTO users (name, password, email, phone, gender, dob, address, website, search_term, number_field, range_field, color_field, file_name, time_field, month_field, week_field)
          VALUES ('$name', '$password', '$email', '$phone', '$gender', '$dob', '$address', '$website', '$search', '$number', '$range', '$color', '$file_name', '$time', '$month', '$week')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration successful!'); window.location.href='index.html';</script> - register.php:35";
  } else {
    echo "Error: - register.php:37" . $conn->error;
  }
}

$conn->close();
?>
