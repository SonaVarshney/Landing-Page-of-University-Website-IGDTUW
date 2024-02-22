<?php
$imagesFolder = 'images/';

$imageUrls = [];
$files = glob($imagesFolder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

if (empty($files)) {
    echo json_encode(['error' => 'No images found in the specified folder.']);
} else {
    foreach ($files as $file) {
        $imageUrls[] = $file;
    }

    // header('Content-Type: application/json'); 
    echo json_encode($imageUrls);
}
?>
