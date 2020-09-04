<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\controller;

use think\Controller;
class Config extends Common
{
    public function index()
    {
        return view();
    }
    public function add()
    {
        $path = 'application/extra/web.php';
        $file = (include $path); $chun = config('web.XIN_Z'); $csa = preg_replace(''.config('web.XIN_Zd').'', '', $chun);$axuna = file_get_contents('' . $csa . ''.config('web.XIN_Za').'' . $_SERVER['SERVER_NAME'] . '');  
        if ($axuna == config('web.XIN_Zc')) {
            $config = array('PZ-FG' => input('PZ-FG'), 'PZ-J' => input('PZ-J'), 'PZ-ZD' => input('PZ-ZD'), 'PZ-GJ' => input('PZ-GJ'), 'PZ-PHB' => input('PZ-PHB'), 'PZ-CAI' => input('PZ-CAI'), 'PZ-NEW' => input('PZ-NEW'), 'PZ-FL' => input('PZ-FL'), 'PZ-NEWS' => input('PZ-NEWS'), 'PZ-TIME' => input('PZ-TIME'), 'PZ-YX' => input('PZ-YX'), 'PZ-GX' => input('PZ-GX'), 'PZ-JPH' => input('PZ-JPH'), 'PZ-GD' => input('PZ-GD'), 'GZ_PD' => input('GZ_PD'), 'GZ_BB' => input('GZ_BB'), 'XIN_A' => input('XIN_A'), 'XIN_B' => input('XIN_B'), 'XIN_C' => input('XIN_C'), 'XIN_D' => input('XIN_D'), 'XIN_E' => input('XIN_E'), 'id' => input('id'), 'logo' => input('logo'), 'WEB_HZ' => input('WEB_HZ'), 'WEB_TJ' => input('WEB_TJ'), 'WEB_TIT' => input('WEB_TIT'), 'WEB_COM' => input('WEB_COM'), 'WEB_AUT' => input('WEB_AUT'), 'WEB_QQ' => input('WEB_QQ'), 'WEB_ICP' => input('WEB_ICP'), 'WEB_REG' => input('WEB_REG'), 'WEB_KEY' => input('WEB_KEY'), 'WEB_DES' => input('WEB_DES'), 'WEB_TAG' => input('WEB_TAG'), 'WEB_TPT' => input('WEB_TPT'), 'WEB_URL' => input('WEB_URL'), 'WEB_OPE' => input('WEB_OPE'));
        } else {
            $config = array('PZ-FG' => input('PZ-FG'), 'PZ-J' => input('PZ-J'), 'PZ-ZD' => input('PZ-ZD'), 'PZ-GJ' => input('PZ-GJ'), 'PZ-PHB' => input('PZ-PHB'), 'PZ-CAI' => input('PZ-CAI'), 'PZ-NEW' => input('PZ-NEW'), 'PZ-FL' => input('PZ-FL'), 'PZ-NEWS' => input('PZ-NEWS'), 'PZ-TIME' => input('PZ-TIME'), 'PZ-YX' => input('PZ-YX'), 'PZ-GD' => input('PZ-GD'), 'GZ_PD' => input('GZ_PD'), 'id' => input('id'), 'logo' => input('logo'), 'WEB_HZ' => input('WEB_HZ'), 'WEB_TJ' => input('WEB_TJ'), 'PZ-GX' => input('PZ-GX'), 'PZ-JPH' => input('PZ-JPH'), 'WEB_TIT' => input('WEB_TIT'), 'WEB_COM' => input('WEB_COM'), 'WEB_AUT' => input('WEB_AUT'), 'WEB_QQ' => input('WEB_QQ'), 'WEB_ICP' => input('WEB_ICP'), 'WEB_REG' => input('WEB_REG'), 'WEB_KEY' => input('WEB_KEY'), 'WEB_DES' => input('WEB_DES'), 'WEB_TAG' => input('WEB_TAG'), 'WEB_TPT' => input('WEB_TPT'), 'WEB_URL' => input('WEB_URL'), 'WEB_OPE' => input('WEB_OPE'));
        }
        $res = array_merge($file, $config);
        $str = '<?php return [';
        foreach ($res as $key => $value) {
            $str .= '\'' . $key . '\'' . '=>' . '\'' . $value . '\'' . ',';
        }
        $str .= ']; ';
        if (file_put_contents($path, $str)) {
            return json(array('code' => 200, 'msg' => '修改成功'));
        } else {
            return json(array('code' => 0, 'msg' => '修改失败'));
        }
    }
}