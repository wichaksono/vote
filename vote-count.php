<?php
require 'config.php';

if (isset($_GET['nomer']) && ! empty($_GET['nomer'])) {
    
    $nomerVote = $_GET['nomer'];
    // $dateTime = date('mm/dd/yy H:M');

    $sql = "INSERT INTO voting (id_opsi, date_create) VALUES ('$nomerVote', NOW()) ";

    $insert = $connect->query($sql);
    if ($insert) {
        echo "<script>alert('Terima Kasih atas Vote nya'); window.location.href='index.php';</script>";
        exit();
    } else {
        die('Oops!! Internal Error');
    }
}