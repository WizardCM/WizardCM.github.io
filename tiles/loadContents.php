<?php

/***************************************
 *** loadContent.php                 ***
 *** Author: Christopher Quackenbush ***
 *** Modified: July 15th 2012        ***
 ***************************************/


function loadFile($file) { // You should probably rewrite since it's 2:30am here...
	$directory = 'wp-content/themes/perdana/tiles/cache/';
	return file_get_contents($directory.$file);
}

$gamesPlayed = loadFile("gamesPlayed.txt");
$gameVideos = loadFile("gameVideos.txt");
$music = loadFile("music.txt");
$posts = loadFile("posts.txt");
$projects = loadFile("projects.txt");
$reading = loadFile("reading.txt");
$shows = loadFile("shows.txt");
$twitter = loadFile("twitter.txt");

?>