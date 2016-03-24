<?php
namespace Home\Model;
use Think\Model;
class adminUserModel extends Model {
   public function changepwd($userid,$code,$newpwd,$checkcode)
   {
       $encrypt_pwd=md5($newpwd);
        if($code==$checkcode)
        {
            $status=$this->query("update admin_user where u_id='$userid' set u_pwd=$encrypt_pwd");
            if($status){
               unset($_SESSION['code']);
                return "1";

            }else{
                return "0";
            }
        }else{
            return "2";
        }
   }
    /**
     * 查询所有用户
     */
    public function name()
    {
        return $this->select();
    }
}