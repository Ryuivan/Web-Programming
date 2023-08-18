<?php

require "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

session_start();
setcookie("login", "true", time() + 3600 * 24);
$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();

$spreadsheet->getDefaultStyle()
    ->getFont()
    ->setName('Calibri')
    ->setSize(12);

$spreadsheet->getActiveSheet()
    ->setCellValue("A1", "No.")
    ->setCellValue("B1", "Name")
    ->setCellValue("C1", "Age")
    ->setCellValue("D1", "Gender")
    ->setCellValue("E1", "Height")
    ->setCellValue("F1", "Weight")
    ->setCellValue("G1", "BMI")
    ->setCellValue("H1", "Category");

$row = 2;


if (!isset($_SESSION["bmiData"])) {
    $_SESSION["bmiData"] = array();

}

if (isset($_POST["submit"])) {
    if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["height"]) && isset($_POST["weight"])) {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];

        $heightMeter = $height / 100;
        $bmi = $weight / ($heightMeter * $heightMeter);
        $bmi = round($bmi, 2);

        if ($bmi < 18.5) {
            $indicator = "Underweight";
        } else if ($bmi >= 18.5 && $bmi < 25) {
            $indicator = "Normal";
        } else if ($bmi >= 25 && $bmi < 30) {
            $indicator = "Overweight";
        } else if ($bmi >= 30) {
            $indicator = "Obese";
        }

        $_SESSION["bmiData"][] = [
            "name" => $name,
            "age" => $age,
            "gender" => $gender,
            "height" => $height,
            "weight" => $weight,
            "bmi" => $bmi,
            "indicator" => $indicator
        ];

        $spreadsheet = IOFactory::load("bmi_data.xlsx");
        $sheet = $spreadsheet->getActiveSheet();
        $row = $sheet->getHighestRow() + 1;

        $spreadsheet->getActiveSheet()
            ->setCellValue("A" . $row, $row - 1)
            ->setCellValue("B" . $row, $name)
            ->setCellValue("C" . $row, $age)
            ->setCellValue("D" . $row, $gender)
            ->setCellValue("E" . $row, $height)
            ->setCellValue("F" . $row, $weight)
            ->setCellValue("G" . $row, $bmi)
            ->setCellValue("H" . $row, $indicator);
        $row++;

        $writer = new Xlsx($spreadsheet);
        $writer->save("bmi_data.xlsx");

        header("Location: proses_bmi.php");
        exit;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMI Calculator</title>
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
                        <a class="nav-link active" aria-current="page" href="#">BMI Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proses_bmi.php">Calculator</a>
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
            <div class="text-center my-4">
                <h1>BMI Calculator</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-container">
                    <?php if (isset($_POST["submit"])): ?>
                        <?php if (!isset($_POST["name"]) || !isset($_POST["age"]) || !isset($_POST["gender"]) || !isset($_POST["height"]) || !isset($_POST["weight"])): ?>
                            <div class="warning-text">
                                <h5>All fields are required. Please fill all required fields and submit again.</h5>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <form action="" method="post">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control">
                        <label for="gender" class="form-label">Gender</label>
                        <br>
                        <input type="radio" name="gender" id="male" value="Male"> Male
                        <input type="radio" name="gender" id="female" value="Female"> Female
                        <br>
                        <label for="height" class="form-label">Height</label>
                        <input type="number" name="height" id="height" class="form-control">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" name="weight" id="weight" class="form-control">
                        <button type="submit" name="submit" class="btn btn-primary mt-3 mx-auto d-flex">Calculate
                            BMI</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>