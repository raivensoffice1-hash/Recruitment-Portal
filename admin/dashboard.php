<?php

session_start();

include "../db.php";

if(!isset($_SESSION['admin']))
{
header("Location:index.php");
exit();
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<link rel="stylesheet" href="../style.css">

<style>

table{

width:95%;

margin:auto;

border-collapse:collapse;

}

th,td{

padding:12px;

border:1px solid #ccc;

text-align:center;

}

th{

background:#2563eb;

color:white;

}

.logout{

width:180px;

margin:20px auto;

display:block;

text-align:center;

background:red;

padding:12px;

color:white;

text-decoration:none;

border-radius:8px;

}

</style>

</head>

<body>

<h1 align="center">

Candidate List

</h1>

<a class="logout" href="logout.php">

Logout

</a>

<table>

<tr>

<th>ID</th>

<th>Name</th>

<th>Mobile</th>

<th>District</th>

<th>Age</th>

<th>Date & Time</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM candidates ORDER BY id DESC");

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['district']; ?></td>

<td><?php echo $row['age']; ?></td>

<td><?php echo $row['created_at']; ?></td>

</tr>

<?php

}

?>

</table>

</body>

</html>
