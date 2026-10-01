```php
<?php

require_once __DIR__ . "/db.php";

$id = $_GET["id"];

// Get student data
$sql = "SELECT * FROM students WHERE id = $id";

$result = mysqli_query($conn, $sql);

$student = mysqli_fetch_assoc($result);

// Update data
if (isset($_POST["update"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "UPDATE students SET
            name = '$name',
            email = '$email',
            phone = '$phone',
            address = '$address'
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {

        header("Location: index.php");
        exit;

    } else {

        echo "Error: " . mysqli_error($conn);

    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>

    <h1>Edit Student</h1>

    <form method="POST">

        <label>Name</label>
        <br>

        <input
            type="text"
            name="name"
            value="<?php echo $student["name"]; ?>"
            required
        >

        <br><br>

        <label>Email</label>
        <br>

        <input
            type="email"
            name="email"
            value="<?php echo $student["email"]; ?>"
            required
        >

        <br><br>

        <label>Phone</label>
        <br>

        <input
            type="text"
            name="phone"
            value="<?php echo $student["phone"]; ?>"
            required
        >

        <br><br>

        <label>Address</label>
        <br>

        <textarea
            name="address"
            required
        ><?php echo $student["address"]; ?></textarea>

        <br><br>

        <button type="submit" name="update">
            Update Student
        </button>

    </form>

    <br>

    <a href="index.php">Back to Student List</a>

</body>

</html>
```
