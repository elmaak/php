<?php
include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Edit User</h2>

    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="dashboard.php" class="btn btn-secondary">Back</a>

    </form>

</div>

</body>
</html>