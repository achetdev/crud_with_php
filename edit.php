<?php
include './config.php';
$id = $_GET['studentId'];

$stmt = "SELECT * FROM students WHERE id = $id";
$qry = mysqli_query($conn, $stmt);
if ($qry) {
    $data = mysqli_fetch_assoc($qry);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD with php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" style="margin-top: 20vh;">
                <div class="card text-left">
                    <h3 class="card-header">
                        <span class="bi bi-plus">
                            New student
                        </span>
                    </h3>
                    <div class="card-body">
                        <form action="./server.php" method="post">
                            <input type="text" name="id" value="<?php echo $data['id']; ?>" hidden>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    <input type="text" name="student_name" class="form-control" id=""
                                        value="<?php echo $data['name']; ?>" required autofocus>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    <input type="email" name="studentEmail" class="form-control"
                                        value="<?php echo $data['email']; ?>" id="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone number
                                </td>
                                <td>
                                    <input type="number" name="student_number" class="form-control"
                                        value="<?php echo $data['phone']; ?>" id="" required>
                                </td>
                            </tr>
                            <tr class="text-center mt-5">
                                <td colspan="2" class="text-center mt-5">
                                    <input type="submit" class="btn btn-success" value="update" name="update-student">

                                </td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
} else {
    echo 'no data';
}