<?php
return array(
    
    //'SHOW_PAGE_TRACE' =>true,
    //'配置项'=>'配置值'
        /* 调试配置 */
        //'SHOW_PAGE_TRACE' => true,
        'MODULE_ALLOW_LIST'  => array('Admin','Home','Install'),
        /* URL配置 */
       'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
       'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
       'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符
       
        'DEFAULT_MODULE'        =>  'Home',  // 默认模块
        'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
        'DEFAULT_ACTION'        =>  'index', // 默认操作名称
    
    //sae数据库
    //'DB_TYPE'           =>  'mysql',     // 数据库类型
    //'DB_DEPLOY_TYPE'    =>  1,
    //'DB_RW_SEPARATE'    =>  true,
    //'DB_HOST'           =>  SAE_MYSQL_HOST_M.','.SAE_MYSQL_HOST_S, // 服务器地址
    //'DB_NAME'           =>  SAE_MYSQL_DB,        // 数据库名
    //'DB_USER'           =>  SAE_MYSQL_USER,    // 用户名
    //'DB_PWD'            =>  SAE_MYSQL_PASS,         // 密码
    //'DB_PORT'           =>  SAE_MYSQL_PORT,        // 端口
    //更改模板替换变量，让普通能在所有平台下显示
    
    
       /* 数据库配置 */
     'DB_TYPE'   => 'mysql', // 数据库类型
     'DB_HOST'   => 'w.rdc.sae.sina.com.cn', // 服务器地址
    'DB_NAME'   => 'app_jianglijun1', // 数据库名
     'DB_USER'   => 'mo31xl0w01', // 用户名
    'DB_PWD'    => 'hj5h1l3x25hm35m1ii4zi12lwli15k14zw3lli2m',  // 密码
    'DB_PORT'   => '3307', // 端口
     'DB_PREFIX' => 'web_', // 数据库表前缀
     'ORIGINAL_TABLE_PREFIX' => 'web_', //默认表前缀，用于升级安装，安装卸载插件
    
         /* 分页COUNT */
         'PAGE_SIZE'   => '10',
    
    
        //模版设置相关
        'TMPL_ACTION_SUCCESS'   => 'Public/dispatch_jump',
        'TMPL_ACTION_ERROR'     => 'Public/dispatch_jump',
    
        //加载配置文件
        'LOAD_EXT_CONFIG' => 'site',
    
    
        'LOG_RECORD' => true, // 开启日志记录
        'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误
        'LOG_TYPE'      =>  'File', // 日志记录类型 默认为文件方式
            
   
);