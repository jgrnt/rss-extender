<?php

$config['author']		= "Lars Formella";
$config['author_url']	= "http://www.larsformella.de/portfolio/programme-software/rss-extender/";
$config['url']			= "http://www.nerdcore.de/feed/";
$config['base_url']		= "http://www.nerdcore.de";
$config['content']		= array("#<div id=\"thepost\"><h1>[^<]*</h1>(.*)</div><!-- close thepost -->#Uis", 1);
$config['search'] =  array( "#<img.*data-lazy-type=\"image\".*<noscript>#Ui",
  "#</noscript>#Ui",
  "#<script.*</script>#Uis",
  "#<iframe.*</iframe>#Uis"
                          );
$config['replace'] = array( "",
  "",
  "",
  ""
                          );
#$config['test_urls'] = array ("http://www.nerdcore.de/2016/02/17/facebook-instant-articles-for-the-masses/",
#                              "http://www.nerdcore.de/2014/04/19/magnetic-micro-robots/",
#                              "http://www.nerdcore.de/2014/04/18/happy-sans-happy/"
#                             );
?>
