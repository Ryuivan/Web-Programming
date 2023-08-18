<?php

session_start();

if (!isset($_SESSION["bmiData"]["name"])) {
    header("Location: index.php");
    exit;
}

$bmiData = $_SESSION["bmiData"];
$recentData = end($bmiData);

$name = $recentData["name"];
$age = $recentData["age"];
$gender = $recentData["gender"];
$height = $recentData["height"];
$weight = $recentData["weight"];
$bmi = $recentData["bmi"];
$indicator = $recentData["indicator"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator | Result</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                        <a class="nav-link active" aria-current="page" href="#">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">History</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <?php if (isset($name) && isset($age) && isset($gender) && isset($height) && isset($weight)): ?>
                <div class="text-center my-4">
                    <h1>BMI Result</h1>
                </div>
                <div class="info-container mt-4 d-flex justify-content-center">
                    <div>
                        <p><b>For the information you entered:</b></p>
                        <p>Name:
                            <?= $name ?>
                        </p>
                        <p>Age:
                            <?= $age ?>
                        </p>
                        <p>Gender:
                            <?= $gender ?>
                        </p>
                        <p>Height:
                            <?= $height ?>
                        </p>
                        <p>Weight:
                            <?= $weight ?>
                        </p>
                    </div>
                </div>

                <div class="bmi-info d-flex justify-content-center">
                    <?php if ($indicator === "Normal"): ?>
                        <div class="normal-text">
                            <p>Your BMI is <b>
                                    <?= $bmi ?>
                                </b>, indicating your weight is in the <b>
                                    <?= $indicator ?>
                                </b> category for adults of your height.</p>
                        </div>
                    <?php elseif ($indicator === "Underweight" || $indicator === "Overweight"): ?>
                        <div class="yellow-text">
                            <p>Your BMI is <b>
                                    <?= $bmi ?>
                                </b>, indicating your weight is in the <b>
                                    <?= $indicator ?>
                                </b> category for adults of your height.</p>
                        </div>
                    <?php else: ?>
                        <div class="red-text">
                            <p>Your BMI is <b>
                                    <?= $bmi ?>
                                </b>, indicating your weight is in the <b>
                                    <?= $indicator ?>
                                </b> category for adults of your height.</p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="bmi-category d-flex justify-content-center">
                    <div class="category-wrapper mt-3">
                        <p><b>BMI Category</b></p>
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">BMI</th>
                                    <th scope="col">Weight Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-light">
                                    <td>Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td>18.5 - 24.9</td>
                                    <td>Normal</td>
                                </tr>
                                <tr class="table-light">
                                    <td>25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td>30.0 and above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="index.php"><button class="btn btn-primary">Calculate Again</button></a>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <a href="history.php"><button class="btn btn-primary">View History</button></a>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>