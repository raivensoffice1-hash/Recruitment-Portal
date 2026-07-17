<?php

include "db.php";

$name = trim($_POST['name']);
$mobile = trim($_POST['mobile']);
$district = trim($_POST['district']);
$age = trim($_POST['age']);

$stmt = $conn->prepare("INSERT INTO candidates(name,mobile,district,age) VALUES(?,?,?,?)");

$stmt->bind_param("sssi",$name,$mobile,$district,$age);

if($stmt->execute())
{
?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Success</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2 style="color:green;text-align:center;">

Application Submitted Successfully

</h2>

<p style="text-align:center;font-size:18px;">

Our team will contact you within 24 hours.

</p>

<br>

<center>

<a href="index.php">

<button>

Back

</button>

</a>

</center>

</div>

</body>

</html>

<?php

}
else{

echo "Something Went Wrong.";

}

?>
