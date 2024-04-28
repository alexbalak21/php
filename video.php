<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video - Title</title>
</head>

<?php
$video_url = $_GET['video'];
?>

<body>
    <main style="height: 98vh; display: flex; justify-content: center; align-items: center;">
        <video controls preload="metadata" style="width: 85%;">
            <source src="<?= $video_url ?>" type="video/mp4" />
        </video>
    </main>
</body>

</html>