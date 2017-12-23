<?php
$_site = require_once(getenv("SITELOAD")."/siteload.php");
$S = new $_site->className($_site);

$h->title = "Mountain Messiah 2017";
$h->banner =<<<EOF
<h1>2018 Annual Mountain Messiah</h1>
<p>At 8,850 feet, this is the highest sung rendition of the Messiah
by George Frederick Handel</p>
EOF;

$h->css =<<<EOF
  <style>
img[src$='facebook3.jpg'] {
  width: 10rem;
}
img[src$='2016.png'] {
  width: 40rem;
}
  </style>
EOF;
list($top, $footer) = $S->getPageTopBottom($h, "<hr>");

echo <<<EOF
$top
<hr>
<article class="content-center">
<section>
<h3>Wait till Next Year</h3>
<p>The 2017 Mountain Messiah is over but we will do it again next year. Stay tuned for 2018 information</p>
<a href="https://www.facebook.com/MountainMessiah/"><img src="https://bartonphillips.net/images/facebook3.jpg"></a>

</section>
</article>
<hr>
$footer
EOF;
