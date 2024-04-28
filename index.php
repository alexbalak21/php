<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<?php

function listDirectories($dir)
{
    // Ensure the directory exists
    if (!is_dir($dir)) {
        throw new Exception("Directory does not exist: " . $dir);
    }

    $folders = [];
    $items = scandir($dir);

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue; // Skip current and parent directory links
        }

        $fullPath = $dir . DIRECTORY_SEPARATOR . $item;

        if (is_dir($fullPath)) {
            $folders[] = $fullPath; // Collect folder path
            $subdirs = listDirectories($fullPath);
            if ($subdirs) {
                foreach ($subdirs as $subdir) {
                    if (is_dir($subdir)) {
                        $folders[] = $subdir;
                    }
                }
            }
        }
    }

    return $folders;
}

function listMp4Files($dir)
{
    // Ensure the directory exists
    if (!is_dir($dir)) {
        throw new Exception("Directory does not exist: " . $dir);
    }
    $files = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        if (str_ends_with($item, ".mp4")) {
            $files[] = $item;
        }
    }
    return $files;
}
?>

<body>

    <div>
        <?php

        $DIR = "videos";
        $dirs = listDirectories($DIR);
        $dirVideos = [];
        foreach ($dirs as $dir) {
            $name = basename($dir) !== "subtitles" ? basename($dir) : "";
            echo "<h3>$name</h3>";
            $videos = listMp4Files($dir);
            if ($videos !== []) {
                echo "<ul>";
                foreach ($videos as $video) {
                    $vide_name = trim($video, ".mp4");
                    echo "<li><a href='$dir\\$video'>$vide_name</a></li>";
                }
                echo "</ul>";
            }
        }
        ?>
    </div>



</body>

</html>