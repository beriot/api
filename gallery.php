<?php
$API_key = 'AIzaSyBxC80TZNyOjgjVxbFxnuxdojAeJyZuPUo';
$channelID = 'UC4manpkVsRoBBrQFBQqVJbA';
$maxResults = 10;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=' . $channelID
    . '&maxResults=' . $maxResults
    . '&key=' . $API_key . ''
));
?>

<?php include "head.php" ?>

<body>

<?php include "headerGallery.php" ?>


<div class="galleryChanel">
    <h1 class="title--video">Notre chaîne favorites sur le sujet : </h1>
    <div class="row">
        <?php

        foreach ($videoList->items as $item) {
            if (isset($item->id->videoId)) {
                echo '<div class="youtube-video-gallery col-4">
                <iframe width="350" height="210" src="https://www.youtube.com/embed/' . $item->id->videoId . '" frameborder="0" allowfullscreen></iframe>
                <h2 class="galleryChanel--title">' . $item->snippet->title . '</h2>
            </div>';
            }
        }
        ?>
    </div>
</div>

<?php include "footer.php" ?>
