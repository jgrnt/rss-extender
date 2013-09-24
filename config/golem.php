<?php

$config['author']		= "Lars Formella";
$config['author_url']	= "http://www.larsformella.de/portfolio/programme-software/rss-extender/";
$config['url']			= "http://rss.golem.de/rss.php?feed=RSS2.0";
$config['base_url']		= "http://www.golem.de";
$config['content']		= array("#<!--content-->(.*)<!--/content-->#Uis", 1);
$config['search']		= array("#<script type=\"text\/javascript\">.*= new.*SWFObject\(\"(.*)\",\".*\",\"(.*)\",\"(.*)\",\".*\",\".*\"\);.*.addVariable\(\"id\", \"(.*)\"\);.*<\/script>#Uis",
								"#<script( language=\"javascript\"|) type=\"text\/javascript\".*>.*<\/script>#Uis",
								"#<li class=\".*\">(.*)<\/li>#Uis",
								"#<ul class=\".*\">(.*)<\/ul>#Uis",
								"#<li>\s*<img src=\"\"[^>]*>\s*</li>#Uis");
$config['replace']		= array("<embed type=\"application/x-shockwave-flash\" src=\"$1\" bgcolor=\"#000000\" quality=\"high\" allowfullscreen=\"true\" scale=\"noScale\" allowscriptaccess=\"always\" flashvars=\"id=$4&amp;qual=medium&amp;autoPl=false&amp;buffer=6\" width=\"$2\" height=\"$3\">",
								"",
								"$1",
								"$1",
								"");
$config['split']		= array("#<link rel=\"next\" href=\"([^\"]*)\">#Uis", 1);

?>
