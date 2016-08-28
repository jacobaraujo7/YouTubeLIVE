<?php

class YouTubeLIVE{

private $jsonData;

    function __construct($chanel_id, $key) {

    $this->jsonData = json_decode(file_get_contents(
        'https://www.googleapis.com/youtube/v3/search?part=snippet&channelId='.$chanel_id.'&eventType=live&type=video&key='.$key
    ));

    
    }

    public function isLive(){
            $liveSituation = $this->jsonData->items[0]->snippet->liveBroadcastContent;
            if($liveSituation === 'live'){
                return true;
            } else {
                return false;
            }
    }

    public function getVideoID(){
         return  $this->jsonData->items[0]->id->videoId;
    }

     public function getEmbledUrl(){
         return  'https://www.youtube.com/embed/'.$this->getVideoID().'?rel=0;showinfo=0;autoplay=1';
    }



}