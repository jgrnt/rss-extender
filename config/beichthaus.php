<?php

$config['author']		= "Sven Fischer";
$config['author_url']	= "http://blog.strubbl.de/";
$config['url']			= "http://www.beichthaus.com/feed.rss2";
$config['base_url']		= "http://www.beichthaus.com";
$config['content']		= array("#<section class=\"clear\">(.*)</section>#Uis", 1);
$config['search']		= array("#<nobr>#Uis",
								"#<a href=\"#Uis",
								"#<script type=\"text/javascript\"> initMap\(.*\); </script>#Uis",
								"#<script.*>.*</script>#Uis",
								"#align:left;#Uis",
								"#<div id=map_.*</div>#Uis",
								"#<div style=\"display:block; border:0px red solid; float:right;\">.*</div>#Uis",
								"#<object.*>.*</object>#Uis");
$config['replace']		= array("",
								"<a href=\"".$config['base_url'],
								"",
								"",
								"",
								"",
								"",
								"");
#$config['test_urls'] = array("http://www.beichthaus.com/?h=index&c=00026536", "http://www.beichthaus.com/?h=index&c=00037629");

?>
