<?php

if (!empty($_FILES['files']['name'])) {

    $files = $_FILES['files'];

    $uploaded = [];
    $failed = [];

    $allowed = ['jpg', 'png', 'gif'];

    foreach ($files['name'] as $position => $file_name) {
        $file_tmp = $files['tmp_name'][$position];
        $file_size = $files['size'][$position];
        $file_error = $files['error'][$position];

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if (in_array($file_ext, $allowed)) {

            if ($file_error === 0) {

                if ($file_size <= 1000000) {

                    $file_name_new = 'image' . uniqid('', true) . '.' . $file_ext;
                    $file_destination = 'images/' . $file_name_new;

                    if (move_uploaded_file($file_tmp, $file_destination)) {
                        $uploaded[$position] = $file_destination;

                    } else {
                        $failed[$position] = "Le téléchargement de {$file_name} a échoué";
                    }
                } else {
                    $failed[$position] = "Le fichier {$file_name} est trop grand";
                }

            } else {
                $failed[$position] = "Erreur dans le téléchargement de {$file_name}";
            }

        } else {
            $failed[$position] = 'Extension de fichier ' . $file_ext . ' non autorisée;';
        }

        if (!empty($failed)) {
            echo $failed[$position];
        }

    }

}
