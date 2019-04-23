<?php require 'treatmentForm.php';

$fileRes = scandir('images');

?>

<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Laisse pas traîner ton file</title>

</head>
<body>
<h1>Laisse pas traîner ton file</h1>
<h3>Télécharger la photo de votre choix</h3>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    <input type="file" name="files[]" multiple="multiple">
    <input type="submit" value="Envoyer">

</form>

<?php

if (isset($fileRes)) {
    foreach ($fileRes as $position => $value) {
        if ($value != '.' && $value != '..') {

            echo '<img src=" images/' . $value . '" alt="..." class="img-thumbnail"> <br>';
            echo $value ?> <br>
            <a href="unlink.php?get=<?= $fileRes[$position]; ?>">Supprimer <br></a>
            <?php
        }
    }
}
?>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</html>