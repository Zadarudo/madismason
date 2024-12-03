<?php
session_start();
if (!isset($_SESSION["role"])) {
    header("location: /login.php");
}

if ($_SESSION["role"] == "admin") {
    header("location: /index.php");
}
if ($_SESSION["role"] == "manager") {
    header("location:/managerpage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Report | User Page</title>
    <style>
      .card .card-header {
        background-color: black;
        color: white;
      }
      .card-body a {
        background-color: gray;
        border: solid 2px black;
        color: white;
      }
      .card-body .btn-danger{
        background-color: red;
      }
      h2 {
        display: flex;
        justify-content: center;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h2>Dashboard</h2>
            </div>

            <div class="card-body">
                <h3>Hello <?php echo $_SESSION["username"]; ?></h3>
                <h5>Your Email: <?php echo $_SESSION["email"]; ?></h5>
                <h5>Your Role: <?php echo !empty($_SESSION["role"]) ? $_SESSION["role"] : "N/A"; ?> </h5>
                <a href="logout.php" class="btn btn-danger mr-2" role="button">Logout</a>
                <a href="reports_list.php" class="btn btn-warning mr-2" role="button">Saved Report</a>
                <a href="report.php" class="btn btn-warning mr-2" role="button">Make new report</a>
            </div>
        </div>
        </div>
    </div>



</body>
</html>