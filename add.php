<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- include style -->
    <?php include 'header.php'; include 'style.php'; include 'connection.php'; ?>
    <title>Add</title>
</head>
<body>

<?php 

if (isset($_POST['submit'])) {
    
    $Fname = $_POST['firstName'];
    $Lname = $_POST['lastName'];
    $Age = $_POST['age'];

    $query = "INSERT INTO `contact`(`first_name`,`last_name`,`age`) VALUES ('$Fname','$Lname','$Age')";
    $conn->query($query);

    header('location:dashboard.php');
}

?>

<div class="container">

    <h1 class="text-center py-5">Add</h1>

    <form action="" method="post">
        <div class="mb-3">
        <label for="">First Name</label>
        <input class="form-control" type="text" name="firstName" id="firstName">
        <div class="mb-3">
        </div>
        <label for="">Last Name</label>
        <input class="form-control" type="text" name="lastName" id="lastName">
        <div class="mb-3">
        </div>
        <label for="">Age</label>
        <input class="form-control" type="text" name="age" id="age">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>