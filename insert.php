<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'pimpimchanok119.mysql.database.azure.com', 'Pimchanok119@pimpimchanok119', 'PPNuro26', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];    #ดึงข้อมูลมาเก็บไว้ในตัวแปร
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";  #คำสั่งinsert


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully! CONGRATULATION!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
