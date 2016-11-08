<?php
$_site = require_once(getenv("SITELOAD")."/siteload.php");
$S = new $_site->className($_site);

$h->title = "Mountain Messiah 2015";
$h->banner =<<<EOF
<h1>2016 Annual Mountain Messiah</h1>
<p>At 8,850 feet, this is the highest sung rendition of the Messiah
by George Frederick Handel</p>
EOF;

list($top, $footer) = $S->getPageTopBottom($h, "<hr>");

echo <<<EOF
$top
<hr>
<article class="content-center">
<section>
<h3>Look at this page as it gets closer to Chrismas 2016 for dates and location as well as a list of the musical sections.</h3>
</section>
</article>
<hr>
$footer

EOF;
