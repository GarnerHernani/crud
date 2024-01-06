<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- include style -->
    <?php include 'header.php'; include 'style.php'; include 'connection.php'; ?>
    <title>Read</title>
</head>
<body>

<div class="container">

    <h1 class="text-center py-5">Student Management System</h1>

    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            $query = "SELECT * FROM `contact`";
            $result = $conn->query($query);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td>
                            <form action="update.php" method="post">
                                <input type="hidden" name="ID" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </td>
                        <td>
                            <form action="delete.php" method="post">
                                <input type="hidden" name="ID" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
            
                <?php }
            } ?>
        </tbody>
    </table>
</div>

    <!-- include scripts -->
    <?php include 'scripts.php'; ?>
</body>
</html>