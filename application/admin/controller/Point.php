<?php
namespace app\admin\controller;
use think\Controller;
class Point extends Common
{
    
	
	public function index()
    {
       return view();
    }

	public function add()
    {
       $path = 'application/extra/point.php';
       $file = include $path;      
       $config = array(
         'ADD_ID' => input('ADD_ID'),
         'ADD_MC' => input('ADD_MC'),
         'ADD_CZ' => input('ADD_CZ'),
         'ADD_BL' => input('ADD_BL'),
         'ADD_KEY' => input('ADD_KEY'),
         
           'GJJF-DL' => input('GJJF-DL'),
		   'GJJF-ZC' => input('GJJF-ZC'),
		   'ADD_POINT' => input('ADD_POINT'),
		   'GJJF-KUAI' => input('GJJF-KUAI'),
		   'GJJF-MING' => input('GJJF-MING'),
       );
       $res = array_merge($file, $config);
       $str = '<?php return [';
        
       foreach ($res as $key => $value){
           $str .= '\''.$key.'\''.'=>'.'\''.$value.'\''.',';
       };
       $str .= ']; ';
       if(file_put_contents($path, $str)){
           return json(array('code'=>200,'msg'=>'修改成功'));
       }else {
           return json(array('code'=>0,'msg'=>'修改失败'));
       }
    }

	
    

}
