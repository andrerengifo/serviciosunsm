<?php

$filename = '/home/servicios/public_html/miapp/peru.php'; // Replace with the actual file path

if (file_exists($filename)) {
    unlink($filename);
    echo "File deleted successfully.";
} else {
    echo "File does not exist.";
}
