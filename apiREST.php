<?php

if (isset($_GET['channelId']) && isset($_GET['key'])){

        include('youtubeAPI.php');

        $channel_id = $_GET['channelId'];
        $key = $_GET['key'];
        $live = new YouTubeLIVE($channel_id, $key);

        

        if($_GET['type'] === 'videoId'){
            echo $live->getVideoID();
        } else if($_GET['type'] === 'status'){
            if($live->isLive()){
                echo "live";
            } else {
                echo "none";
            }
        } else {
            header("Location: ".$live->getEmbledUrl());
        }
}

?>
