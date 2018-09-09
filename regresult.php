<?php
 include ("conn/mysqlconn.php");

// define variables and set to empty values
$firstname = $lastname = $email = $gender = $age = $disease = $size ="";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $firstname = test_input($_GET["firstname"]);
  $lastname = test_input($_GET["lastname"]);
  $email = test_input($_GET["email"]);
  $gender = test_input($_GET["gender"]);
  $age = test_input($_GET["age"]);
  $disease = test_input($_GET["disease"]);
  $size = test_input($_GET["size"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname."<br>".$lastname."<br>".$email."<br>".$gender."<br>".$age."<br>".$disease."<br>".$size."<br>";

//insert data
$sql = "INSERT INTO userforrun (firstname,lastname, email, gender,age, disease, size) 
VALUES ('$firstname','$lastname', '$email', '$gender', '$age', '$disease','$size')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>