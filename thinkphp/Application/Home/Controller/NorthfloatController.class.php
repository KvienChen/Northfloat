<?php
namespace Home\Controller;
use Think\Controller;
class NorthfloatController extends Controller {
    public function index(){
        //北漂易租----后台登陆模块
        if(!empty($_POST)){
            //接收表单传来的值
            $username=$_POST['username'];//接收用户名称
            $password=$_POST['password'];//接收密码
            $this->redirect('Northfloat/firstpage');
        }
        $this->display('login');
    }
/**
 * 跳转到首界面
 */

    public function firstpage()
    {
        $this->display('index');
    }
}