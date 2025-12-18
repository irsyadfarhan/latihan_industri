<?php
$dir = __DIR__ . '/uploads/documents/';
if (!is_dir($dir)) {
    if (@mkdir($dir, 0777, true)) {
        echo "Folder created: " . $dir;
        echo "<br>Writable: " . (is_writable($dir) ? 'YES' : 'NO');
    } else {
        echo "Failed to create folder";
    }
} else {
    echo "Folder exists: " . $dir;
    echo "<br>Writable: " . (is_writable($dir) ? 'YES' : 'NO');
}
?>