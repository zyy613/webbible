<?php
return [
	'CFG_BASEPATH'=>MODEL_PATH,//额外的配置文件的基地址，似乎没有使用，框架默认的两个基本的配置文件不受以下四个变量控制
	'CFG_AUTOLOAD'=>["routerule","db"],//需要自动加载的额外的配置文件，每个文件名是一个domain
	'CFG_USERPATH'=>"config/",//额外的配置文件相对于基地址的路径
	'CFGSUFFIX'=>".cfg.php",//额外的配置文件的后缀名字
	'ROUTERULE_DOMAIN'=>"routerule",//路由权限规则表在配置中的哪个domain
	'DEFAULT_MODELRIGHT'=>1,//默认的继承自Model类的类执行所需要的用户权限
        'REQUEST_LIMIT'=>false,//配置全局的是否限制只响应POST请求
	'GUESTUSER'=>["uid"=>0,"uname"=>"请登录","nickname"=>"请登录","role"=>0],//当用户未登录时查询用户信息所显示的内容
	//'MODELFAIL_BASEPATH'=>ENTRY_PATH,丢弃
	//'ROUTEFAIL_BASEPATH'=>ENTRY_PATH,丢弃
	'NOROUTERIGHT_PAGE'=>"pages/norouteright.page.php",//没有路由权限时显示的页面
	'NOROUTERIGHTEXIT'=>true,//没有路由权限时，是否停止执行后面的脚本
	//'NOROUTERERIGHTTURN'=>false,丢弃
	'FAILROUTE_PAGE'=>"pages/failroute.page.php",//路由失败时显示的页面
	'CALLFUNCFAIL_PAGE'=>"pages/callfuncfail.page.php",//调用映射函数失败时显示的页面
	'LACKPARA_PAGE'=>"pages/lackpara.page.php",//缺乏必须的参数时显示的页面
	'LACKPARASTOP'=>true,//缺乏参数时，是否停止执行后面的脚本
	'LACKPARARETURN'=>false,//缺乏参数时，当选择继续执行后面脚本时lackpara检测函数的返回值
	'NOMODELRIGHT_PAGE'=>"pages/nomodelright.page.php",//没有权限执行映射函数时显示的页面
	'NOMODELRIGHTSTOP'=>true,//没有权限执行映射函数时是否停止执行后面的代码
	'NOMODELRIGHTRETURN'=>false,//没有权限执行映射函数时当选择继续执行后面的代码时检测函数的返回值
	'CONTROLLERFILE_SUFFIX'=>".controller.php",//控制器函数的后缀
	'MAXIM_FILE'=>"include/maxim.include.php",//这个文件中存放PHP数组，当通过框架显示前台页面时，框架自动把这些变量转换为js变量
	'GODBLESS_FILE'=>"include/godbless.include.php",//这个文件中存放对前台框架运行必须加载的js，css，通过框架显示前台页面时，框架会自动加载这个
	'COMFILE_SUFFIX'=>".com.php",//xxx
	'COMFILE_PATH'=>"coms/",//xxx
	'CACHEFILE_SUFFIX'=>".cache.html",	//xxx
	'PAGE_404_RETURN'=>false,//xxx
	'PAGE_404'=>"pages/pagenotfound.page.php",//找不到前台页面时显示的页面
	'DEFAULT_REFTYPE'=>2,//xxx
	'TOPLAYOUT_SUFFIX'=>".html"//顶级模版文件的后缀
];