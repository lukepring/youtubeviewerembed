<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Viewer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>YouTube Viewer</h1>
    <form action="/yt" method="get">
        <input placeholder="Enter YouTube Video Link" name="url" id="url" type="text">
        <button type="submit">Watch</button>
    </form>
    <?php
    if(!$_GET["url"]){
        echo "<p class='start'>Enter a Video URL to get started</p>";
    } else {
        $url = $_GET["url"];
        if(str_contains($url, "youtube.com")) {
            $parsed = explode("?v=", $url);
            $id = $parsed[1];
            echo "<iframe width=\"1000\" height=\"500\" src=\"https://www.youtube.com/embed/$id\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
        } else {
            echo "<p style='color: red;'>Invalid URL.</p>";
        }
    }
    ?>
    <footer>
        By Luke Pring
    </footer>
</body>
</html>