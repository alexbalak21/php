
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

    <?php
    header('Content-Type: application/json');
    $DIR = "videos";
    $dirs = listDirectories($DIR);
    $data = [];
    foreach ($dirs as $dir) {
        if (basename($dir) !== "subtitles") {
            $name = basename($dir);
            $data[] =  $name;
            $videos = listMp4Files($dir);
            if ($videos !== []) {
                $video_adresses = ['videos' => []];
                foreach ($videos as $video) {
                    $video_adresses['videos'][] = "$dir\\$video";
                }
                $data[] = $video_adresses;
            }
        }
    }
    $jsonData = json_encode($data);
    echo $jsonData;
    ?>