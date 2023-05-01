<?php
include './config.php';
$stmt = "SELECT * FROM students";
$qry = mysqli_query($conn, $stmt);
if ($qry) {
    $check = mysqli_num_rows($qry);
    if ($check > 0) {
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
        <div class="row mt-5">
            <div class="col-8">
                <a href="./create.php" class="btn btn-success">
                    <span class="bi bi-plus-circle">
                        add student
                    </span>
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <th>student id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone number</th>
                        <th>date</th>
                        <th colspan="2">operations</th>
                    </thead>
                    <tbody>
                        <?php
while ($row = mysqli_fetch_assoc($qry)) {
            ?>
                        <tr>
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                            <td>
                                <?php echo $row['date']; ?>
                            </td>
                            <td colspan="2">
                                <a href="./edit.php?studentId=<?php echo $row['id']; ?>" class="btn btn-success">
                                    <span class="bi bi-pen">
                                        edit
                                    </span>
                                </a>
                                <a href="./server.php?deleteId=<?php echo $row['id']; ?>" class="btn btn-danger">
                                    <span class="bi bi-trash">
                                        delete
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <?php
}
        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
}
}

?>