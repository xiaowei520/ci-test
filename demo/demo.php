<?php

/**
 * Class Test_Demo
 */
class Test_Demo extends CI_TestCase
{
    /**
     * 可以使用CI 超级对象 调用helper,model ..
     */
    function setUp()
    {
        parent::setUp();
        $this->CI->load->helper('email');;

    }

    /**
     *
     */
    function testStringCompare()
    {

        $sVarOne = 'No,';
        $sVarTwo = 'Yes,';
        $this->assertEquals($sVarOne, $sVarTwo,'check one '.__FUNCTION__);
        $this->assertEquals($sVarOne, $sVarOne);

    }
}
