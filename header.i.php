<?php
$pageHeadText = <<<EOF
<head>
  <title>{$arg['title']}</title>
  <!-- METAs -->
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="copyright" content="$this->copyright">
  <meta name="Author" content="Barton L. Phillips, mailto:barton@bartonphillips.com"/>
  <meta name="description" content="{$arg['desc']}"/>
  <link rel="stylesheet" href="messiah.css" type="text/css" />
  <!-- Local CSS -->
  {$arg['css']}
  <!-- jQuery from Google site -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!-- script -->
  {$arg['extra']}
  {$arg['script']}
</head>
EOF;
