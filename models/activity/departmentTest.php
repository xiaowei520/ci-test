<?php

/**
 * Class departmentTest
 */
class  departmentTest extends CI_TestCase
{

    /**
     * 可以使用CI 超级对象 调用helper,model ..
     */
    function setUp()
    {
        parent::setUp();
        $this->CI->load->helper('email');;
        $this->CI->load->config('config_url');
    }


    /**
     * 测试 获取权限
     */
    public function testGetPrivilegeName()
    {

        $this->CI->load->model('activity/department');
        $sPrivilegeName = $this->CI->department->getPrivilegeName(array('department_id' => '1,2'));

        $this->assertEquals($sPrivilegeName,'local');

//        $this->assertEquals($qty, 'ss');

    }
}

?>