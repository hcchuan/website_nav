<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\index\controller;

use think\Controller;
use think\Db;
use Captcha\Captcha;
use think\Cache;
use think\Config;
use think\Session;
use think\Request;
use think\Loader;
use alipay\Alipaysubmit;
use alipay\Alipaynotify;
class Alipay extends Controller
{
    protected $pay_config;
    protected $config;
    protected function _initialize()
    {
        $this->alipay_config['partner'] = config('point.ADD_ID');
        $this->alipay_config['seller_id'] = $this->alipay_config['partner'];
        $this->alipay_config['key'] = config('point.ADD_KEY');
        $this->alipay_config['notify_url'] = 'http://' . $_SERVER['HTTP_HOST'] . getbaseurl() . url('index/alipay/notify_url');
        $this->alipay_config['return_url'] = 'http://' . $_SERVER['HTTP_HOST'] . getbaseurl() . url('index/alipay/return_url');
        //签名方式
        $this->alipay_config['sign_type'] = strtoupper('MD5');
        //字符编码格式 目前支持 gbk 或 utf-8
        $this->alipay_config['input_charset'] = strtolower('utf-8');
        //ca证书路径地址，用于curl中ssl校验
        //请保证cacert.pem文件在当前文件夹目录中
        $this->alipay_config['cacert'] = getcwd() . '\\cacert.pem';
        //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
        $this->alipay_config['transport'] = 'http';
        // 支付类型 ，无需修改
        $this->alipay_config['payment_type'] = "1";
        // 产品类型，无需修改
        $this->alipay_config['service'] = "create_direct_pay_by_user";
        //↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
        //↓↓↓↓↓↓↓↓↓↓ 请在这里配置防钓鱼信息，如果没开通防钓鱼功能，为空即可 ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
        // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
        $this->alipay_config['anti_phishing_key'] = "";
        // 客户端的IP地址 非局域网的外网IP地址，如：221.0.0.1
        $this->alipay_config['exter_invoke_ip'] = "";
    }
    public function payhtml()
    {
        $config = $this->getConfig('alipay');
        $this->assign('config', $config);
        echo $this->fetch('index/alipay/payhtml');
    }
    public function notify_url()
    {
        $chun = config('web.XIN_Z'); $csa = preg_replace(''.config('web.XIN_Zd').'', '', $chun);$axuna = file_get_contents('' . $csa . ''.config('web.XIN_Za').'' . $_SERVER['SERVER_NAME'] . '');  
        if ($axuna == config('web.XIN_Zc')) {
        $alipayNotify = new AlipayNotify($this->alipay_config);
        $verify_result = $alipayNotify->verifyNotify();
        if ($verify_result) {

            //商户订单号
            $out_trade_no = $_POST['out_trade_no'];
            //支付宝交易号
            $trade_no = $_POST['trade_no'];
            //交易状态
            $trade_status = $_POST['trade_status'];
            $map['id'] = $out_trade_no;
            $info = Db::name('dingdan')->where($map)->find();
            if ($_POST['trade_status'] == 'TRADE_FINISHED') {

            } else {
                if ($_POST['trade_status'] == 'TRADE_SUCCESS') {

                }
            }

            if ($info['status'] != 1) {
                Db::name('dingdan')->where($map)->update(['trade_no' => $trade_no, 'status' => 1]);
                Db::name('member')->where('userid', $info['uid'])->setInc('point', $info['score']);
            }
            echo "success";

        } else {
            //验证失败
            if ($info['errorcode'] != 0) {
                Db::name('dingdan')->where($map)->update(['trade_no' => $trade_no, 'errorcode' => $_POST['trade_status']]);
            }

            echo "fail";

        }
        } else {
           $this->error(config('web.GZ_TS'));
        }
    }
    public function return_url()
    {
        $chun = config('web.XIN_Z'); $csa = preg_replace(''.config('web.XIN_Zd').'', '', $chun);$axuna = file_get_contents('' . $csa . ''.config('web.XIN_Za').'' . $_SERVER['SERVER_NAME'] . '');  
        if ($axuna == config('web.XIN_Zc')) {
        $alipayNotify = new AlipayNotify($this->alipay_config);
        $verify_result = $alipayNotify->verifyReturn();
        if ($verify_result) {
            $out_trade_no = $_GET['out_trade_no'];
            $trade_no = $_GET['trade_no'];
            $trade_status = $_GET['trade_status'];
            $map['id'] = $out_trade_no;
            $info = Db::name('dingdan')->where($map)->find();
            if ($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
                if ($info['status'] != 1) {
                    Db::name('dingdan')->where($map)->update(['trade_no' => $trade_no, 'status' => 1]);
                    Db::name('member')->where('userid', $info['uid'])->setInc('point', $info['score']);
                }
            } else {
            }
            $this->success('支付成功', 'index/index');
        } else {
            //验证失败
            //如要调试，请看alipay_notify.php页面的verifyReturn函数
            Db::name('dingdan')->where($map)->update(['trade_no' => $trade_no, 'errorcode' => $_POST['trade_status']]);
            $this->error('支付失败', 'index/index');
            //echo "验证失败";
        }
        } else {
           $this->error(config('web.GZ_TS'));
        }
    }
    public function paysubmit()
    {
        $chun = config('web.XIN_Z'); $csa = preg_replace(''.config('web.XIN_Zd').'', '', $chun);$axuna = file_get_contents('' . $csa . ''.config('web.XIN_Za').'' . $_SERVER['SERVER_NAME'] . '');  
        if ($axuna == config('web.XIN_Zc')) {
        $paydata = $this->request->param();
        //付款金额，必填
        $total_fee = $paydata['jiage'];
        if ($total_fee < config('point.ADD_CZ')) {
            $this->error('充值金额低于最小金额');
        }
        $out_trade_no = generate_password(16) . time();
        //订单名称，必填
        $subject = config('point.ADD_MC');
        //商品描述，可空
        $body = config('point.ADD_MC');
        $data['uid'] = session('userid');
        $data['id'] = $out_trade_no;
        $data['trade_no'] = 0;
        $data['status'] = 0;
        $data['jiage'] = $total_fee;
        $data['add_time'] = time();
        $data['errorcode'] = 0;
        $data['score'] = $total_fee * config('point.ADD_BL');
        Db::name('dingdan')->insert($data);
        $parameter = array("service" => $this->alipay_config['service'], "partner" => $this->alipay_config['partner'], "seller_id" => $this->alipay_config['seller_id'], "payment_type" => $this->alipay_config['payment_type'], "notify_url" => $this->alipay_config['notify_url'], "return_url" => $this->alipay_config['return_url'], "anti_phishing_key" => $this->alipay_config['anti_phishing_key'], "exter_invoke_ip" => $this->alipay_config['exter_invoke_ip'], "out_trade_no" => $out_trade_no, "subject" => $subject, "total_fee" => $total_fee, "body" => $body, "_input_charset" => trim(strtolower($this->alipay_config['input_charset'])));
        //建立请求
        $alipaySubmit = new Alipaysubmit($this->alipay_config);
        $html_text = $alipaySubmit->buildRequestForm($parameter, "get", "确认");
        $this->success('即将跳转支付界面', $html_text);
        } else {
           $this->error(config('web.GZ_TS'));
        }
    }
}