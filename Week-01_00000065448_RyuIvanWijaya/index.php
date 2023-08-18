<?php
    include_once('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W1</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <?php include('navbar.php'); ?>
        <div class="card m-2">
            <div class="card-body">
                Hello my name is <?php echo $nama ?>
            </div>
        </div>
    </div>
</body>
</html>