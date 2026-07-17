<?php
session_start();
include "../db.php";

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['admin']=$username;
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error="Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<div class="container">

<h1>Admin Login</h1>

<?php
if(isset($error))
{
echo "<p style='color:red;text-align:center;'>$error</p>";
}
?>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button
name="login">

Login

</button>

</form>

</div>

</body>

</html>
