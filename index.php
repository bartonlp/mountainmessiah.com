<?php
$_site = require_once(getenv("SITELOAD")."/siteload.php");
$S = new $_site->className($_site);

$h->title = "Mountain Messiah 2015";
$h->banner =<<<EOF
<h1>2016 Annual Mountain Messiah</h1>
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
<h3>Sunday, Dec 11th at the YMCA Chapel at 7 PM with a pre-concert at 6:30.</h3>
<p>We are just putting thing together for this Christmas celebration. Check back soon for more details.</p>
<img src="Messiah Poster 2016.png"><br>
<a href="https://www.facebook.com/MountainMessiah/"><img src="http://bartonphillips.net/images/facebook3.jpg"></a>

</section>
</article>
<hr>
$footer

EOF;
