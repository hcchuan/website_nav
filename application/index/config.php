<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
$openMobile=0;
//检测是否有手机模板
if(is_dir(ROOT_PATH.'template'.DS.config('web.WEB_TPT').DS.'wap')&&request()->isMobile()){
	$openMobile=1;
}
return [
  
	'template'=> [
        'view_path' => './template/'.config('web.WEB_TPT').($openMobile?'/wap/':'/pc/'),
		'view_suffix' => 'html',
	    'view_depr'    => '_',
    ],
  
	'url_html_suffix' => 'html',
	'url_route_on'  =>  true,

];
