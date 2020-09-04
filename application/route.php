<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
return [
    '__pattern__' => [ 'name' => '\w+', ],
    '[home]' => [':id'   => ['index/user/home', ['id' => '\d+']],],
	'[daohang]' => [':id'   => ['index/index/html', ['id' => '\d+']],],
	'[view]' => [ ':id'   => ['index/index/view', ['id' => '\d+']],],
	'[article]' => [ ':id'   => ['index/index/article', ['id' => '\d+']],],
	'[xq]' => [ ':id'   => ['index/index/xq', ['id' => '\d+']],],
	'[edit]' => [ ':id'   => ['index/html/edit', ['id' => '\d+']],],
	'[edits]' => [':id'   => ['index/comment/edit', ['id' => '\d+']],],

    '[dans]' => [ ':id'   => ['index/index/dan', ['id' => '\d+']],],
	'choice' => ['index/index/choice',['ext'=>'html']],
	'html' => ['index/index/html',['ext'=>'html']],
	'search' => ['index/index/search',['ext'=>'html']],
	'add' => ['index/html/add',['ext'=>'html']],
	'guanyu' => ['index/html/guanyu',['ext'=>'html']],
	'ad' => ['index/html/ad',['ext'=>'html']],
	'news' => ['index/index/news',['ext'=>'html']],
	'newsso' => ['index/index/newsso',['ext'=>'html']],
	'top' => ['index/index/top',['ext'=>'html']],
	'list' => ['index/index/lists',['ext'=>'html']],
	'wang' => ['index/wang/index',['ext'=>'html']],
	'[w]' => [ ':id'   => ['index/wang/w', ['id' => '\d+']],],
  
	'kuai' => ['index/user/kuai',['ext'=>'html']],
];
