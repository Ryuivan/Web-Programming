<?php

session_start();
$bmiData = $_SESSION["bmiData"];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMI Calculator | History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">BMI Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proses_bmi.php">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">History</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <?php if (count($bmiData) > 0): ?>
                <h1 class="text-center mt-4">BMI History</h1>
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Height</th>
                            <th>Weight</th>
                            <th>BMI</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bmiData as $data): ?>
                            <?php if ($data["indicator"] === "Normal"): ?>
                                <tr class="table-info">
                                <?php elseif ($data["indicator"] === "Overweight" || $data["indicator"] === "Underweight"): ?>
                                <tr class="table-warning">
                                <?php elseif ($data["indicator"] === "Obese" || $data["indicator"] === "Obesity"): ?>
                                <tr class="table-danger">
                                <?php endif; ?>
                                <td>
                                    <?= $data["name"] ?>
                                </td>
                                <td>
                                    <?= $data["age"] ?>
                                </td>
                                <td>
                                    <?= $data["gender"] ?>
                                </td>
                                <td>
                                    <?= $data["height"] ?>
                                </td>
                                <td>
                                    <?= $data["weight"] ?>
                                </td>
                                <td>
                                    <?= $data["bmi"] ?>
                                </td>
                                <td>
                                    <?= $data["indicator"] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No BMI data available.</p>
            <?php endif; ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>