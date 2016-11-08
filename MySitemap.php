<?php
   // Site map
   
define('TOP', '/var/www/');
define('INCLUDES', TOP."/includes");
define('DATABASE_ENGINES', INCLUDES."/database-engines");
define('SITE_INCLUDES', SITE_ROOT."/includes"); // SITE_ROOT is defined in siteautoload.php!

// Email info and logfile location

//define('LOGFILE', "/var/www/mountainmessiah/database.log");

define('EMAILADDRESS', "bartonphillips@gmail.com");
define('EMAILRETURN', "bartonphillips@gmail.com");
define('EMAILFROM', "bartonphillips@gmail.com");

// Database connection information
// 'engine' is the type of database engine to use. Options are 'mysqli', 'sqlite'. Others may be added
// later

$dbinfo = array('host' => 'localhost',
                'user' => 'barton',
                'password' => '7098653',
                'database' => 'barton',
                'engine' => 'mysqli'
               );

// SiteClass information
// This site has no members so no membertable.
// See the SiteClass constructor for other possible values like 'count', 'emailDomain' etc.

$__year = date('Y');

$siteinfo = array('siteDomain' => "mountainmessiah.com",
                  'siteName' => "Messiah",
                  // 'emailDomain' => null,
                  'path' => '/var/www/messiah',
                  'className' => "SiteClass",
                  'copyright' => "$__year Mountain Messiah",
                  //'memberTable' => "rotarymembers",
                  'masterdb' => 'barton',
                  'dbinfo' => $dbinfo,
                  'headFile' => "header.i.php",
                  'bannerFile' => "banner.i.php",
                  'footerFile' => "footer.i.php",
                  'count' => true,
                  'countMe' => false, // Count BLP
                  'trackerImg1' => "/images/MountainMessiah.png", // script
                  'trackerImg2' => "/images/George_Frideric_Handel.jpg", // normal
                  'myUri' => "bartonphillips.dyndns.org" // if we are at home then 'localhost'
                 );

