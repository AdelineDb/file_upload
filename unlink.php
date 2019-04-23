<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mon formulaire</title>

</head>
<body>

<?php
require 'treatmentForm.php';

foreach ($_GET as $key => $item) {

    if (isset($_GET)) {

        unlink($item);

        echo 'Le fichier a été correctement effacé';
    }
}
?>
