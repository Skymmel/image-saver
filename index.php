<!DOCTYPE html>
<html>
<head>
    <title>File List</title>
    <style>
        ul { list-style-type: none; padding: 0; }
        li { margin: 10px 0; }
    </style>
</head>
<body>
<h2>Files in Directory:</h2>
<ul>
    <?php
    $folder = "data";
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }
    $files = scandir($folder);
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $filePath = "$folder/$file";
            $fileSize = filesize($filePath);
            echo "<li><a href='$filePath' download>$file</a> ($fileSize bytes) | <a href='$filePath' target='_blank'>View</a></li>";
        }
    }
    ?>
</ul>
</body>
</html>
