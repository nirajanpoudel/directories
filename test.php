<?php
/*
In this example the source media is located at
rtmp://server.test.com:1935/vod/mp4:sample.mp4
Flow player has the name split by 2 part. They are stored in respective variables below.
*/
$base_url = 'http://cloud.truestreamz.com/mnmovies/mn/mob/VODTheMostWanted.mp4/playlist.m3u8';
$video_url = 'mp4:sample.mp4';

$today = gmdate("n/j/Y g:i:s A");
$ip = '128.199.140.213';
$key = "himalayaAPP2345977@2015"; //enter your key here
$validminutes = 20;
$str2hash = $ip . $key . $today . $validminutes;
$md5raw = md5($str2hash, true);
$base64hash = base64_encode($md5raw);
$urlsignature = "server_time=" . $today ."&hash_value=" . $base64hash. "&validminutes=$validminutes";
$base64urlsignature = base64_encode($urlsignature);

echo "$base_url?wmsAuthSign=$base64urlsignature";
?>