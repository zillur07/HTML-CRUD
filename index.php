```php
<?php

require_once __DIR__ . "/db.php";

$sql = "SELECT * FROM students ORDER BY id ASC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>
</head>

<body>

    <h1>Student List</h1>

    <a href="add.php">Add New Student</a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        <?php

        while ($student = mysqli_fetch_assoc($result)) {

        ?>

            <tr>

                <td>
                    <?php echo $student["id"]; ?>
                </td>

                <td>
                    <?php echo $student["name"]; ?>
                </td>

                <td>
                    <?php echo $student["email"]; ?>
                </td>

                <td>
                    <?php echo $student["phone"]; ?>
                </td>

                <td>
                    <?php echo $student["address"]; ?>
                </td>

                <td>

                    <a href="edit.php?id=<?php echo $student["id"]; ?>">
                        Edit
                    </a>

                    |

                    <a
                        href="delete.php?id=<?php echo $student["id"]; ?>"
                        onclick="return confirm('Are you sure you want to delete this student?');"
                    >
                        Delete
                    </a>

                </td>

            </tr>

        <?php

        }

        ?>

    </table>

</body>

</html>
```
