
<?php
  // include 'connection.php';
  $mysqli = new mysqli("localhost","root","","contact");

  if ($_POST['name'] == '' || $_POST['email'] == '') {
    echo "gagal insert";
  }else {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `info`(`name`, `email`) VALUES ('$name', '$email')";

    if (mysqli_query($mysqli, $sql)) {
      header("location:succses.html");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    // ok
  }
 ?>
