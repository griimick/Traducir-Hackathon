<?php
$GLOBALS['APIKey'] = 'AIzaSyAYeP_W9YaWQFzWtdznYtF0PK1f7KFgyrc';


function get_youtube_title($video_id){
   $html = 'https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&key='.$GLOBALS['APIKey'].'&part=snippet';
   $response = file_get_contents($html);
   $decoded = json_decode($response, true);
   foreach ($decoded['items'] as $items) {
        $title= $items['snippet']['title'];
        return $title;
   }
}

function get_youtube_desc($video_id){
   $html = 'https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&key='.$GLOBALS['APIKey'].'&part=snippet';
   $response = file_get_contents($html);
   $decoded = json_decode($response, true);
   foreach ($decoded['items'] as $items) {
        $title= $items['snippet']['description'];
        return $title;
   }
}

function get_youtube_channelTitle($video_id){
   $html = 'https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&key='.$GLOBALS['APIKey'].'&part=snippet';
   $response = file_get_contents($html);
   $decoded = json_decode($response, true);
   foreach ($decoded['items'] as $items) {
        $title= $items['snippet']['channelTitle'];
        return $title;
   }
} 

function get_youtube_id($video_id){
   $html = 'https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&key='.$GLOBALS['APIKey'].'&part=snippet';
   $response = file_get_contents($html);
   $decoded = json_decode($response, true);
   foreach ($decoded['items'] as $items) {
        $title= $items['snippet']['id'];
        return $title;
   }
}
?>