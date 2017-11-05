<?php

class WelcomeTest extends CI_TestCase
{

    /**
     * 可以使用CI 超级对象 调用helper,model ..
     */
    function setUp()
    {
        parent::setUp();
        $this->CI->load->helper('email');;

    }

    public function test_APPPATH()
    {
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'check~~ ing '
		);
    }
}
