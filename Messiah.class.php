<?php
/* REMEMBER function names are case-insensitive!!!! */
/**
 * @package Messiah extends SiteClass which extends Database
 */

class Messiah extends SiteClass {
  /**
   * Constructor
   * new GranbyLakeRotary()
   * Connects database, does page count optionally.
   * @param boolean $count Default true. If true do the counter logic else don't
   */
  
  public function __construct($x=array()) {
    global $dbinfo, $siteinfo; // from .sitemap.php

    $s = $siteinfo;
    //$s['databaseClass'] = new Database($dbinfo);

    // If $x has values then add/modify the $s array

    if(!is_null($x)) foreach($x as $k=>$v) {
      $s[$k] = $v;
    }

    parent::__construct($s); // NOTE: parent constructor calls checkId() which uses this classes method not the parents!
  }

  /**
   * getBanner()
   * Get the banner
   * Extends base class. Provides the rotary wheel image, a <h1>heading, and $pageTitle.
   * @param string $pageTitle Default blank
   * @param bool $nonav don't show navbar
   * @param string $bodytag
   * @return string
   */
  
  public function getBanner($pageTitle = "", $nonav=null, $bodytag=null)
  {
    /*
    $mainTitle = "<img src='/images/wheel.gif' ".
                 "title='Granby Rotary Club' alt='Rotary Wheel'/>\n<h1>The Rotary Club of Granby</h1>\n";
    */
    $ret = parent::getBanner("$mainTitle\n$pageTitle", $nonav, $bodytag);
    return $ret;
  }

  /**
   * getFooter()
   * Get Page Footer
   * Extends base class. No google analitics, and DNT message if isDNT() set.
   * @param variable number of args.
   *  arguments can be strings (defaults: $msg1='', $msg2='', $ctrmsg=''),
   *  an assoc array, or an object.
   *  for array and object the elements are 'msg1', 'msg2', 'ctrmsg''
   * @return string
   */

  public function getFooter($b=null) {
    if(is_string($b)) {
      $x->msg1 = $b;
    } else {
      $x = (object)$b; // Force $b to an object
    }
    
    return parent::getFooter($x);
  }

} // End of class GrandLakeRotary

// ********************************************************************************

// WARNING THERE MUST BE NOTHING AFTER THE CLOSING PHP TAG.
// Really nothing not even a space!!!!
?>