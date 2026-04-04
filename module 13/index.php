<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>

<h2>Add User</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <button type="submit" name="submit">Save</button>
</form>

<h2>Users List</h2>

<?php
$result = mysqli_query($conn, "SELECT * FROM users");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . "<br>";
}
?>

</body>
</html>