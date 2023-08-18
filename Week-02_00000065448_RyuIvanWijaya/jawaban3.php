<?php
function greetings($time)
{
    if ($time >= 0 && $time < 12) {
        return "Selamat Pagi";
    } else if ($time >= 12 && $time < 16) {
        return "Selamat Siang";
    } else if ($time >= 16 && $time < 19) {
        return "Selamat Sore";
    } else
        return "Selamat Malam";
}

function time12format($time)
{
    if ($time >= 0 && $time < 12) {
        return $time . " AM";
    } else if ($time >= 12 && $time < 24) {
        return ($time - 12) . " PM";
    } else if ($time == 24) {
        return "12 AM";
    } else
        return "Invalid Time";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawaban 3</title>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light m-2">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Web Programming - Week 2 | Solution No. 3</span>
        </div>
    </nav>
    <div class="container">
        <h1>Daftar Salam</h1>
        <table class="display table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th>Waktu 24 H</th>
                    <th>Waktu 12 H</th>
                    <th>Salam</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < 24; $i++) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . time12format($i) . "</td>";
                    echo "<td>" . greetings($i) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Waktu 24 H</th>
                    <th>Waktu 12 H</th>
                    <th>Salam</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
        new DataTable('.display');
    </script>
</body>

</html>