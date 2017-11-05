<?php
// prevent direct loading of this file
if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    die("This file cannot be loaded directly.");
}

class CI_TestCase extends PHPUnit_Framework_TestCase
{

    var $CI;

    function setUp()
    {
        $this->CI =& get_instance();

    }

    function tearDown()
    {
    }

}
  
