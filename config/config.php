<?php
    require_once __DIR__ . "/vendor/autoload.php";
    $collection = (new MongoDB\Client)->qc_barang->form_qc;
    $users = (new MongoDB\Client)->qc_barang->users;
?>