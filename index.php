<?php
define('TOPFILE', "/var/www/includes/siteautoload.php");
if(file_exists(TOPFILE)) {
  include(TOPFILE);
} else throw new Exception(TOPFILE . " not found");

$S = new Messiah;

$h->title = "Mountain Messiah 2015";
$h->banner = <<<EOF
<header id="header">
<img src="MountainMessiah.png" alt="logo"/><br>
<img src="George_Frideric_Handel.jpg" alt="Picture of Handel" title="George Frideric Handel" />
EOF;

list($top, $footer) = $S->getPageTopBottom($h, "<hr>");

echo <<<EOF
$top
<h1>2015 Annual Mountain Messiah</h1>
<p>At 8,850 feet, this is the highest sung rendition of the Messiah
by George Frederick Handel</p>
</header>
<hr>
<article class="content">
<section>
<p><i>Come lend your voice in song</i><br>
<i>or</i><br>
<i>Come and listen along</i></p>
<p>As the time grows near look for dates and times here.</p>
<p><a href="https://www.facebook.com/MountainMessiah">
<img src="facebook.png" alt="Facebook"/></a></p>
</section>
</article>
$footer

EOF;
?>