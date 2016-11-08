<?php
$pageHeadText = <<<EOF
<head>
  <title>{$arg['title']}</title>
  <!-- METAs -->
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="Author"
     content="Barton L. Phillips, mailto:barton@bartonphillips.com"/>
  <meta name="description"
     content="{$arg['desc']}"/>

  <link rel="stylesheet" href="messiah.css" type="text/css" />
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<!--[if lte IE 8]>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<!--<![endif]-->
  <link rel="stylesheet" href="http://bartonphillips.net/css/tablesorter.css">
  <link rel="stylesheet" href="http://bartonphillips.net/css/webstats-new.css">
  <!-- Local CSS -->
  {$arg['css']}
  <!-- jQuery from Google site -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
var lastId = $this->LAST_ID;
jQuery(document).ready(function($) {
  $("#logo").attr('src', "/tracker.php?page=script&id=$this->LAST_ID");
});
  </script>
  <script src="blp/js/tracker.js"></script>
  <!-- script -->
  {$arg['extra']}
  {$arg['script']}
</head>
EOF;
