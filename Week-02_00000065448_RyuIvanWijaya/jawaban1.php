<?php 
    $arr2dim = array(
        "India" => array(
            "Ibu Kota" => "New Delhi",
            "Kode Telepon" => 91,
            "Mata Uang" => "INR"
        ),
        "Indonesia" => array(
            "Ibu Kota" => "Jakarta",
            "Kode Telepon" => 62,
            "Mata Uang" => "IDR"
        ),
        "Japan" => array(
            "Ibu Kota" => "Tokyo",
            "Kode Telepon" => 81,
            "Mata Uang" => "JPY"
        ),
    );

    foreach($arr2dim as $negara => $details) {
        echo "<i>". $details["Ibu Kota"] . "</i>  is capital city of <b>$negara</b> <u>$negara's calling code is " . $details["Kode Telepon"] . ' and has "' .$details["Mata Uang"]. '" as currency code </u><br>';
    }
?>