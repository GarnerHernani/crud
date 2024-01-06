<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- include style -->
    <?php include 'header.php'; include 'style.php'; include 'connection.php'; ?>
    <title>Update</title>
</head>
<body>

<?php 

$id = $_POST['ID'];
$query = "SELECT * FROM `contact` WHERE `id`='$id'";
$result = $conn->query($query);
$row = $result->fetch_assoc();


if (isset($_POST['update'])) {
    
    $Fname = $_POST['firstName'];
    $Lname = $_POST['lastName'];
    $age = $_POST['age'];
    $id = $_POST['id'];

    $query = "UPDATE `contact` SET `first_name`='$Fname', `last_name`='$Lname', `age`='$age' WHERE `id`='$id'";
    $conn->query($query);

    header('location:dashboard.php');
}

?>

<div class="container">

    <h1 class="text-center py-5">Update</h1>

    <form action="" method="post">
        <div class="mb-3">
            <label>First Name</label>
            <input class="form-control" type="text" name="firstName" id="firstName" value="<?php echo $row['first_name']; ?>">
        </div>
        <div class="mb-3">
        <label>Last Name</label>
        <input class="form-control" type="text" name="lastName" id="lastName" value="<?php echo $row['last_name']; ?>">
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input class="form-control" type="text" name="age" id="age" value="<?php echo $row['age']; ?>">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        </div>
        <button type="submit" name="update">Update</button>
    </form>
</div>

    <!-- include scripts -->
    <?php include 'scripts.php'; ?>
</body>
</html>