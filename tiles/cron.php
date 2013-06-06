<?php

/***************************************
 *** Cron.php                        ***
 *** Author: Christopher Quackenbush ***
 *** Modified: July 15th 2012        ***
 ***************************************/
date_default_timezone_set("UTC");

class Cron {
	public $saveDirectory = "cache/";
	private $tempContent = "";

 	public function __construct() {
		$this->getContent("music")->saveCache("music.txt")->clean();
		$this->getContent("shows")->saveCache("shows.txt")->clean();
		$this->getContent("gameVideos")->saveCache("gameVideos.txt")->clean();
		$this->getContent("reading")->saveCache("reading.txt")->clean();
		$this->getContent("twitter")->saveCache("twitter.txt")->clean();
		$this->getContent("gamesPlayed")->saveCache("gamesPlayed.txt")->clean();
		$this->getContent("projects")->saveCache("projects.txt")->clean();
		$this->getContent("posts")->saveCache("posts.txt")->clean();
	}

	public function printLog() {

	}

	private function getContent($type) {
		switch($type) {
			case "music":
				$feed = $this->getFeed("http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=ComputerMaster&api_key=b25b959554ed76058ac220b7b2e0a026&limit=1");

				$text = '#text';
				$track = $feed->recenttracks->track;
				$artist = $track->artist;
				$name = $track[0]->name;
				$album = (string)$track->album;
				$date = $track->date;

				$this->tempContent .= '<p style="width: 550px; max-height: 21px; overflow: hidden !important;">'.$name."</p>\r\n";
				$this->tempContent .= '<p style="width: 400px; max-height: 21px; overflow: hidden !important;">'.$artist."</p>\r\n";
				$this->tempContent .= '<p>'.$this->makeNiceTime($date)."</p>";
				break;

			case "shows":
				$feed = $this->getFeed("http://feed43.com/wizardcm-gomiso.xml");
				$this->tempContent .= $this->removeFeedAdvertisement($feed->channel[0]->item[0]->description);
				break;

			case "gameVideos":
				$feed = $this->getFeed("http://feed43.com/wizardcmgaming-simple.xml");
				$this->tempContent .= $this->removeFeedAdvertisement($feed->channel[0]->item[0]->description);
				break;

			case "reading":
				$feed = $this->getFeed("http://feed43.com/wizardcm-goodreads-1.xml");
				$book1 = $feed->channel[0]->item[0]->description;
				$book2 = $feed->channel[0]->item[0]->title;
				$book1 = $this->removeFeedAdvertisement($book1);
				$this->tempContent .= $book1;
				$this->tempContent .= '<p>'.$this->makeNiceTime($book2).'</p>';
				break;

			case "twitter":
				$json = $this->getJson("https://api.twitter.com/1/statuses/user_timeline.json?include_entities=false&include_rts=true&screen_name=WizardCM&count=1");
				$this->tempContent .= '<p style="max-width: 290px; max-height: 63px; overflow: hidden; min-height: 63px;">'.$json[0]->text.'</p>';
				//$this->tempContent .= '<p>'.$this->makeNiceTime($json[0]->created_at).'</p>';
				break;

			case "gamesPlayed":
				$feed = $this->getFeed("http://feed43.com/wizardcm-raptr.xml");
				$this->tempContent .= $this->removeFeedAdvertisement($feed->channel[0]->item[0]->description);
				break;

			case "projects":
				$feed = $this->getFeed("http://feed43.com/wizardcm-projects.xml");
				$this->tempContent .= $this->removeFeedAdvertisement($feed->channel[0]->item[0]->description);
				break;

			case "posts":
				$feed = $this->getFeed("http://feed43.com/wizardcm-blog-3.xml");
				$this->tempContent .= $this->removeFeedAdvertisement($feed->channel[0]->item[0]->description);
				break;

		}

		return $this;
	}

	private function getFeed($url) {
		return new SimpleXMLElement(file_get_contents($url));
	}

	private function getJson($url) {
		return json_decode(file_get_contents($url));
	}

	private function removeFeedAdvertisement($content) {
		$find = '<p><sub><i>-- Delivered by <a href="http://feed43.com/">Feed43</a> service</i></sub></p>';
		$replace = '';
		return str_replace($find, $replace, $content);
	}

	private function saveCache($file) {
		$fileHander = fopen($this->saveDirectory.$file, 'w');
		fwrite($fileHander, $this->tempContent);
		fclose($fileHander);
		return $this;
	}

	private function clean() {
		$this->tempContent = "";
	}

	private function makeNiceTime($date) {
		// Untested and stolen from current homepage code... it should be rewritten/cleaned up.
	    if(empty($date)) {
	        return "Right now";
	    }
	    
	    $periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	    $lengths         = array("60","60","24","7","4.35","12","10");
	    
	    $now             = time();
	    $unix_date       = strtotime($date);
	    
	       // check validity of date
	    if(empty($unix_date)) {    
	        return "Bad date";
	    }
	 
	    // is it future date or past date
	    if($now > $unix_date) {    
	        $difference     = $now - $unix_date;
	        $tense         = "ago";
	        
	    } else {
	        $difference     = $unix_date - $now;
	        $tense         = "from now";
	    }
	    
	    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	        $difference /= $lengths[$j];
	    }
	    
	    $difference = round($difference);
	    
	    if($difference != 1) {
	        $periods[$j].= "s";
	    }
	    
	    return "$difference $periods[$j] {$tense}";
	}
}

$cache = new Cron;

?>