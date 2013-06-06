<?php
/*
Template Name: Next Widget Homepage
*/
?>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/perdana/metrojs/MetroJs.css">
<SCRIPT LANGUAGE="JavaScript" SRC="/wp-content/themes/perdana/metrojs/jquery-1.5.1.min.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="/wp-content/themes/perdana/metrojs/MetroJs.js"></SCRIPT>
<?php include("tiles/loadContents.php"); ?>
<?php get_header(); ?>
<script>
/*
CSS Browser Selector v0.4.0 (Nov 02, 2010)
Rafael Lima (http://rafael.adm.br)
http://rafael.adm.br/css_browser_selector
License: http://creativecommons.org/licenses/by/2.5/
Contributors: http://rafael.adm.br/css_browser_selector#contributors
*/
function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);
</script>


    <div id="content" class="loading" style="max-height: 430px; overflow: hidden;">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">


<a href="http://wizardcm.com/me/music">
 <div class="live-tile" data-mode="flip" data-delay="<?=rand(6000, 12000)?>">
  		<div><div class="tile wide left" title="Recently listened to" style="background-color:#c00d1b">
			<div class="contents">
				<p>Anti Gravity</p><p>Lindsey Stirling<p>Constantly</p>
			</div>
			<h4>Recently listened to</h4>
			<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
				<img src="tiles/lastfm.png" width="16px" height="16px" class="smallicon">
			</div>
			</div></div>

			<div><div class="tile wide left" title="Recently listened to" style="background-image:url(http://userserve-ak.last.fm/serve/500/72318586/Lindsey+Stirling+316452_252418731456988_1322559.jpg); background-size: cover;">
			<div class="contents">
				
			</div>
			<h4></h4>
			<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
				
			</div>
			</div></div>
    </div></a>


<a href="http://twitter.com/wizardcm">
<div class="live-tile" data-mode="flip" data-delay="<?=rand(6000, 12000)?>">

	<div>
	<div class="tile wide left" title="Most Recent Tweet">
		<div class="contents">
			<p>I wish I could fix my website homepage. For now it's mostly static. :(</p>
		</div>
		<h4>Most Recent Tweet</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/twitter-small.png" width="16px" height="16px" class="smallicon">
		</div>
	</div></div>

<div>
	<div class="tile wide left" title="@WizardCM Twitter Stats">
		<div class="contents">
			<p>9,979 Tweets</p>
			<p>432 Followers</p>
			<p>612 Following</p>
		</div>
		<h4>@WizardCM Twitter Stats</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/twitter-small.png" width="16px" height="16px" class="smallicon">
		</div>
	</div></div>


</div></div>


	<a href="http://twitter.com/wizardcm">
<div class="live-tile" data-delay="<?=rand(5000, 10000)?>" style="width: 106px;">
	<div><div class="tile original left" title="Twitter" style="background-color:#007ea5">
		<img src="wp-content/themes/perdana/tiles/twitter.png" width="64px" height="64px">
		<h4>Twitter</h4>
	</div></div>

	<div><div class="tile original left" title="Twitter" style="background-image:url(https://si0.twimg.com/profile_images/1763505783/ava_2012_bigger.png); background-size: cover;">
	</div></div>
</div>
	</a>

	<a href="mailto:matt@wizardcm.com">
	<div class="tile original left" title="Email">
		<img src="wp-content/themes/perdana/tiles/mail.png" width="64px" height="64px">
		<h4>Email</h4>
	</div>
	</a>

	<a href="http://steamcommunity.com/id/wizardcm">
	<div class="tile small left" title="Steam" style="background-color:#3b3938">
		<img width="32px" height="32px" src="wp-content/themes/perdana/tiles/steam.png">
	</div>
	</a>

	<a href="http://www.linkedin.com/in/wizardcm">
	<div class="tile small left" title="LinkedIn" style="background-color:#4494bc">
		<img width="32px" height="32px" src="wp-content/themes/perdana/tiles/linkedin.png">
	</div>
	</a>

	<a href="http://forums.bukkit.org/members/wizardcm.73270/#postings">
	<div class="tile small left" title="Bukkit" style="background-color:#c33e1f">
		<img width="32px" height="32px" src="wp-content/themes/perdana/tiles/bukkit.png">
	</div>
	</a>

	<a href="http://youtube.com/computechmaster">
	<div class="tile small left" title="YouTube" style="background-color:#952520">
		<img width="32px" height="32px" src="wp-content/themes/perdana/tiles/youtube.png">
	</div>
	</a>




	<a href="http://wizardcm.com/me/shows">
<div class="live-tile" data-mode="flip" data-delay="<?=rand(6000, 12000)?>">


	<div><div class="tile wide left" title="Recently watched" style="background-color:#8fa100">
		<div class="contents">
			<?=$shows?><p>Stargate Atlantis</p><p>S01E01</p><p>A day ago</p>
		</div>
		<h4>Recently Watched</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/miso.png" width="16px" height="16px" class="smallicon">
		</div>
	</div></div>

	<div><div class="tile wide left" title="Recently watched" style="background-image:url(http://gomiso.com/uploads/BAhbCFsHOgZmIiEyMDExLzAxLzE5LzA1LzQ0LzIyLzcwMy9maWxlWwc6BmU6CGpwZ1sIOgZwOgp0aHVtYiINMTI1eDc1I24.jpg); background-size: cover;">
	
	</div></div>

	</div></a>




	<a href="http://wizardcm.com/me/games">
 <div class="live-tile" data-mode="flip" data-delay="<?=rand(6000, 12000)?>">


	<div><div class="tile wide left" title="Recently played" style="background-color:#e46300">
		<div class="contents">
			<p>Assassin's Creed: Brotherhood</p><p>On Xbox 360</p><p>In the last 24 hours</p>
		</div>
		<h4>Recently Played</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/raptr.png" width="16px" height="16px" class="smallicon">
		</div>
	</div></div>

	<div><div class="tile wide left" title="Recently played" style="background-image:url(http://b1.raptrcdn.com/games/efd/501/efd501d2a0e911dfa82c00be44bec87b/boxart_v2/20110126174618/boxart-large.jpg); background-size: cover;">

	</div></div>

	</div></a>



	<a href="http://facebook.com/wizardcm">

<div class="live-tile" data-delay="<?=rand(5000, 10000)?>" style="width: 106px;">


	<div><div class="tile original left" title="Facebook" style="background-color:#3b5998">
		<img src="wp-content/themes/perdana/tiles/facebook.png" width="64px" height="64px">
		<h4>Facebook</h4>
	</div></div>

	<div><div class="tile original left" title="Facebook" style="background-image:url(https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c78.0.393.393/s160x160/21673_4950130431361_1487794824_n.jpg); background-size: cover;">
	</div></div>

	</div></a>

	<a href="http://gplus.to/wizardcm">
<div class="live-tile" data-delay="<?=rand(5000, 10000)?>" style="width: 106px;">

	<div><div class="tile original left" title="Google+" style="background-color:#484545">
		<img src="wp-content/themes/perdana/tiles/googleplus.png" width="64px" height="64px">
		<h4>Google+</h4>
	</div>
	</div>

	<div><div class="tile original left" title="Google+" style="background-image:url(https://lh4.googleusercontent.com/-jZO1yW5p064/AAAAAAAAAAI/AAAAAAAAACs/uHEVqe5STGo/s250-c-k/photo.jpg); background-size: cover;">
	</div>
	</div></div>

</a>

	<a href="http://live.xbox.com/en-AU/Profile?gamertag=WizardCM">
<div class="live-tile" data-delay="<?=rand(5000, 10000)?>" style="width: 106px;">

	<div><div class="tile original left" title="Xbox Live" style="background-color:#76ad21">
		<img src="wp-content/themes/perdana/tiles/xbox360.png" width="64px" height="64px">
		<h4>Xbox Live</h4>
	</div></div>

	<div><div class="tile original left" title="Xbox Live" style="background-image:url(https://avatar-ssl.xboxlive.com/avatar/WizardCM/avatarpic-l.png); background-size: cover;">
	</div></div>

	</div></a>



	<a href="http://youtube.com/wizardcmgaming">
 <div class="live-tile" data-mode="flip" data-delay="<?=rand(6000, 12000)?>">

	<div><div class="tile wide left" title="Latest gaming video">
		<div class="contents">
			<?=$gameVideos?><p>Minecraft: Survival - Episode 13</p><p>"This time with some mods"</p><p>2 months ago</p>
		</div>
		<h4>Latest Gaming Video</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/youtube-small.png" width="16px" height="16px" class="smallicon">
		</div>
	</div></div>

	<div><div class="tile wide left" title="Latest gaming video" style="background-image:url(http://i4.ytimg.com/vi/w2ZPtwXx5Hs/mqdefault.jpg); background-size: cover;">
		
	</div></div>


	</div></a>




	<div class="tile wide left">
		<div class="contents">
			<p><a href="http://wcmc.ce.ms/fbc">Facebook Cleaner for Chrome</a></p>
			<p><a href="http://on.fb.me/WizCMMC">My Minecraft Server</a></p>
			<p><a href="http://sfx.wizardcm.com">St Francis Xavier College</a></p> 
		</div>
		<h4>Current + Recent Projects</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/pencil.png" width="16px" height="16px" class="smallicon">
		</div>
	</div>

	<div class="tile wide left">
		<div class="contents">
			<?=$posts?>
		</div>
		<h4>Recent Blog Posts</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/wordpress.png" width="16px" height="16px" class="smallicon">
		</div>
	</div>


	<a href="http://www.goodreads.com/user/show/3179913-matt-gajownik">
<div class="live-tile" data-mode="flip" data-delay="<?=rand(6000, 12000)?>">

		<div><div class="tile wide left" title="Recent + Currently Reading" style="background-color:#908858">
			<div class="contents">
				<?=$reading?><p>The Pillars of Creation (Sword of Truth #7)</p><p>By Terry Goodkind</p><p>2 days ago</p>
			</div>
			<h4>Recent + Currently Reading</h4>
			<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
				<img src="wp-content/themes/perdana/tiles/goodreads.png" width="16px" height="16px" class="smallicon">
			</div>
		</div></div>

		<div><div class="tile wide left" title="Latest Bookshelf Statistics" style="background-color:#908858">
			<div class="contents">
				<?=$reading?><p>0 Currently Reading</p><p>138 Books Read</p><p>88 Books to Read</p>
			</div>
			<h4>Latest Bookshelf Statistics</h4>
			<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
				<img src="wp-content/themes/perdana/tiles/goodreads.png" width="16px" height="16px" class="smallicon">
			</div>
		</div></div>
</div>
	</a>


<div class="live-tile" data-mode="flip" data-delay="<?=rand(6000, 12000)?>">


	<div>
	<div class="tile wide left" title="Laptop specifications" style="background-color:#7c4fc7">
		<div class="contents">
			<p>Intel Core i7-2670QM @ 2.2GHz, 8GB RAM</p>
			<p>NVIDIA GeForce GT 540M with 2GB RAM</p>
			<p>Dell XPS L502x 15"</p>
		</div>
		<h4>Laptop Specifications</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/cpuz.png" width="16px" height="16px" class="smallicon">
		</div>
	</div></div>

	<div>
	<div class="tile wide left" title="Laptop specifications" style="background-color:#7c4fc7">
		<div class="contents">
			<p>Quad-core NVIDIA Tegra 3, 2GB RAM</p>
			<p>10.6" ClearType HD Display @ 1366x768</p>
			<p>Microsoft Surface RT</p>
		</div>
		<h4>Tablet Specifications</h4>
		<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
			<img src="wp-content/themes/perdana/tiles/cpuz.png" width="16px" height="16px" class="smallicon">
		</div>
	</div></div>

</div>



	<a href="http://wma.im">
<div class="live-tile" data-mode="flip" data-delay="<?=rand(6000, 12000)?>">


		<div><div class="tile wide left" title="Minecraft Server" style="background-color:#2d6c8d">
			<div class="contents">
				<p>The Worldwide Minecraft Alliance</p>
				<p><?PHP include("http://wma.im/server/count.php"); ?> - <?PHP include("http://wma.im/server/status.php"); ?></p>
				<p>IP - wma.im</p>
			</div>
			<h4>Minecraft Server</h4>
			<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
				<img src="wp-content/themes/perdana/tiles/pickaxe.png" width="16px" height="16px" class="smallicon">
			</div>
		</div></div>

		<div><div class="tile wide left" title="Minecraft Server" style="background-color:#2d6c8d">
			<div class="contents">
				<p>Survival, Creative, Hunger Games, CTF, TF2,</p>
				<p>The Walls, Mob Arena, Spleef, SkyBlock,</p>
				<p>PVP, The Hidden, Tetris, Chess, Connect 4</p>
			</div>
			<h4>Minecraft Server Features</h4>
			<div style="margin-top:-13px; margin-right:-2px; float:right; width:16px; height:16px">
				<img src="wp-content/themes/perdana/tiles/pickaxe.png" width="16px" height="16px" class="smallicon">
			</div>
		</div></div>

</div>
	</a>




        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>

    <div class="clear"></div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>

<style>


#dashboard {
	display: none
}
#content {
	width: 960px;
	padding: 0px;
	background: transparent;
	font-family: segoe ui, arial, sans-serif;
}

#content a:hover {
	text-decoration:none !important;
}

.tile {
	background-color:#A10;
	color:white;
	margin:5px;
	height: 82px;
	padding:8px 8px 9px 8px;
	font-size:15px;
	cursor:pointer;
	overflow:hidden;
}
	.tile:hover {
		opacity: 0.94;
		//background-color: #920f00;
	
	}

	.tile a {
		text-decoration: none !important;
	}

	.tile .smallicon {
		margin: 0 !important;
	}

	.tile:active {
		margin: 6px 4px 4px 6px;
	}

	.wide {
		width: 292px;
	}

	.original {
	width: 80px !important;	
	}

	.small {
		width:27px !important;
		height:27px !important;
	}
	
	.left {
		float:left !important;
	}

	.tile h4 {
		padding:0;
		margin:0;
		text-transform:uppercase;
		font-size:14px;
		position: relative;
		bottom: -4px;
	}

	.small img {
		border:0;
		margin-left:-2px;
		margin-top:-2px;
	}

	.original img {
		margin-bottom:-7px;
		margin-left:9px;
		margin-top:1px;
	}
	.tile a, .tile a:visited {
		color:white;
		text-decoration:none;
	}

	.tile a:hover {
		color:white;
		text-decoration: underline !important;
	}

	.tile .contents {
		min-height:63px;
		max-height:63px;
		overflow:hidden;
	}

	.loading { display: block }
	.preload { display: none }

.mac .tile, .win.gecko .tile, .win.ie .tile, .linux.opera .tile, .freebsd .tile { font-size:14px !important }
.linux #content { font-family: arial, sans-serif; }
</style>

<!--[if IE]>
<style>
.tile { font-size:14px !important; }
.tile h4 { font-size:13px !important; }
</style>
<![endif]-->

    <!-- Activate live tiles -->
<script type="text/javascript">
    // apply regular slide universally unless .exclude class is applied 
    // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
    $(".live-tile, .flip-list").not(".exclude").liveTile();
</script>
