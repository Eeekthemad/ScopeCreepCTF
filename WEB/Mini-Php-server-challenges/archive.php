<?php
$file = $_GET['file'] ?? '';

// Normalize the slashes just in case
$normalized = str_replace('\\', '/', $file);

// Check if it starts with any number of "../" or "..//" followed by any characters
if (preg_match('#^(?:\.\./|\.\.//)+.+#', $normalized)) {
    echo "Detected path traversal attempt: $file. It works like that!. SCCTF{1OC4lfi1E!NCLusI0N}";
} else {
    echo "Archive is missing file path.";
}
?>