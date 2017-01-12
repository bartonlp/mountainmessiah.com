<?php
  $pageFooterText = "<footer>\n";

  if($arg['msg1']) {
    $pageFooterText .= "<div id='footerMsg'>{$arg['msg1']}</div>\n";
  }

  $pageFooterText .= $counterWigget;
  
  $rdate = getlastmod();
  $date = date("M d, Y H:i:s", $rdate);
  $email = $this->EMAILADDRESS;
  $pageFooterText .= <<<EOF
<div style="text-align: center;">
<p>Copyright &copy; $this->copyright<br>
Last Modified&nbsp;$date<br>
<a href='mailto:$email'>Contact Us</a></p>
</div>

EOF;

  if(!empty($arg['msg2'])) {
  $pageFooterText .=  $arg['msg2'];
  }

  $pageFooterText .= <<<EOF
</footer>
</body>
</html>

EOF;
