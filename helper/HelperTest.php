<?php

class HelperTest extends CI_TestCase
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
     * 测试Email 的 valid_email功能
     */
    public function testEmailValidation()
    {

        $this->assertTrue(valid_email('test@test.com'));
        $this->assertFalse(valid_email('test#test.com'));
        $this->assertTrue(valid_email('test#test.com'));
    }


}

?>