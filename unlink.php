<?php
require 'treatmentForm.php';

if (isset($_POST)) {

    unlink($_POST['delete']);

    echo 'Le fichier a été correctement effacé';
}

