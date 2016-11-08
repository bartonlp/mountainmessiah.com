<?php
return <<<EOF
<header id="header">
<img id="logo" class="titleimage" src="http://bartonphillips.net/images/MountainMessiah.png" alt="logo"/><br>
<img id="GFHandel" src="/tracker.php?page=normal&id=$this->LAST_ID" alt="Picture of Handel" title="George Frideric Handel" />
$mainTitle
</header>
<noscript>
<p style='color: red; background-color: #FFE4E1; padding: 10px'>
<img src="tracker.php?page=noscript&id=$this->LAST_ID">
Your browser either does not support <b>JavaScripts</b> or you have JavaScripts disabled, in either case your browsing
experience will be significantly impaired. If your browser supports JavaScripts but you have it disabled consider enabaling
JavaScripts conditionally if your browser supports that. Sorry for the inconvienence.</p>
</noscript>
EOF;
