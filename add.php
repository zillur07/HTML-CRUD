<?php 
// include "/db.php";
// include "db.php";

// require_once __DIR__ . "/db.php";

// $name = "Zillur Rahman";
// $email = "zillur@gmail.com";
// $phone = "01856624090";
// $address = "Dhaka";
// // $sql = "INSERT INTO students (name, email, phone, address)
// //         VALUES ('$name', '$email', '$phone', '$address')";

// $sql = "INSERT INTO students (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
// // if (mysqli_query($conn, $sql)) {
// //     echo "New record created successfully";
// // } else {
// //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);

// if (mysqli_query($conn, $sql)) {
//     echo "Student Added Successfully";
// } else {
//     echo "Error: " . mysqli_error($conn);
// }



require_once __DIR__ . "/db.php";

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "INSERT INTO students (name, email, phone, address)
            VALUES ('$name', '$email', '$phone', '$address')";

    if (mysqli_query($conn, $sql)) {
        echo "Student Added Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
</head>

<body>

    <h1>Add New Student</h1>

    <form method="POST">

        <label>Name</label>
        <br>
        <input
            type="text"
            name="name"
            placeholder="Enter student name"
            required
        >

        <br><br>

        <label>Email</label>
        <br>
        <input
            type="email"
            name="email"
            placeholder="Enter email"
            required
        >

        <br><br>

        <label>Phone</label>
        <br>
        <input
            type="text"
            name="phone"
            placeholder="Enter phone number"
            required
        >

        <br><br>

        <label>Address</label>
        <br>
        <textarea
            name="address"
            placeholder="Enter address"
            required
        ></textarea>

        <br><br>

        <button type="submit" name="submit">
            Add Student
        </button>

    </form>

    <br>

    <a href="index.php">View Students</a>

</body>

</html>

