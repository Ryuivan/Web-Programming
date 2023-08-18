<?php
require "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;

$reader = IOFactory::createReader("Xlsx");
$spreadsheet = $reader->load("bmi_data.xlsx");
$worksheet = $spreadsheet->getActiveSheet();
$data = $worksheet->toArray();

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
            <?php if (count($data) > 1): ?>
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
                        <?php for ($i = 1; $i < count($data); $i++): ?>
                            <?php $rowData = $data[$i]; ?>
                            <?php $indicator = $rowData[7]; ?>
                            <tr
                                class="<?php echo ($indicator === "Normal") ? 'table-info' : (($indicator === "Overweight" || $indicator === "Underweight") ? 'table-warning' : 'table-danger'); ?>">
                                <td>
                                    <?php echo $rowData[1]; ?>
                                </td>
                                <td>
                                    <?php echo $rowData[2]; ?>
                                </td>
                                <td>
                                    <?php echo $rowData[3]; ?>
                                </td>
                                <td>
                                    <?php echo $rowData[4]; ?>
                                </td>
                                <td>
                                    <?php echo $rowData[5]; ?>
                                </td>
                                <td>
                                    <?php echo $rowData[6]; ?>
                                </td>
                                <td>
                                    <?php echo $rowData[7]; ?>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h1 class="text-center">No BMI data available.</h1>
            <?php endif; ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>