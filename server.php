<?php
include './config.php'; // include our connection file

if (isset($_POST['add-student'])) {
//  get the form fields
    $name = mysqli_real_escape_string($conn, $_POST['student_name']);
    $email = mysqli_real_escape_string($conn, $_POST['studentEmail']);
    $phone = mysqli_real_escape_string($conn, $_POST['student_number']);
//  insert into the database
    $stmt = "INSERT INTO students(name,email,phone) VALUE('$name','$email','$phone')";
    $qry = mysqli_query($conn, $stmt);
    if ($qry) {
        echo '<script>
       window.alert("student added successfully");
         location.href ="./index.php";
         </script>';
    } else {
        echo mysqli_connect_error();
    }
    // get the deleter
} elseif (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $stmt = "DELETE FROM students WHERE id= $id";
    $qry = mysqli_query($conn, $stmt);
    if ($qry) {
        echo '<script>
       window.alert("student deleted successfully");
         location.href ="./index.php";
         </script>';

    } else {
        echo mysqli_connect_error();

    }
// check if the person has clicked the update button
} elseif (isset($_POST['update-student'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['student_name']);

    $email = mysqli_real_escape_string($conn, $_POST['studentEmail']);
    $phone = mysqli_real_escape_string($conn, $_POST['student_number']);
    $stmt = "UPDATE students SET name='$name', email='$email', phone='$phone' WHERE id = $id";
    $qry = mysqli_query($conn, $stmt);
    if ($qry) {
        echo '<script>
       window.alert("student updated successfully");
         location.href ="./index.php";
         </script>';

    } else {
        echo mysqli_connect_error();

    }

}