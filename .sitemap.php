<?php
   // Site map
   
define('TOP', '/var/www/');
define('INCLUDES', TOP."/includes");
define('DATABASE_ENGINES', INCLUDES."/database-engines");
define('SITE_INCLUDES', SITE_ROOT."/includes"); // SITE_ROOT is defined in siteautoload.php!

// Email info and logfile location

define('LOGFILE', "/var/www/mountainmessiah/database.log");

define('EMAILADDRESS', "bartonphillips@gmail.com");
define('EMAILRETURN', "bartonphillips@gmail.com");
define('EMAILFROM', "bartonphillips@gmail.com");

// Database connection information
// 'engine' is the type of database engine to use. Options are 'mysqli', 'sqlite'. Others may be added
// later

$dbinfo = null;

// SiteClass information
// This site has no members so no membertable.
// See the SiteClass constructor for other possible values like 'count', 'emailDomain' etc.

$siteinfo = array('siteDomain' => "mountainmessiah.com",
                  //'memberTable' => "rotarymembers",
                  'headFile' => "header.i.php",
                  'bannerFile' => "banner.i.php",
                  'footerFile' => "footer.i.php",
                  'count' => false,
                  'countMe' => false, // Count BLP
                  'myUri' => "bartonphillips.dyndns.org" // if we are at home then 'localhost'
                 );

?>