<?php
	date_default_timezone_set('Brazil/East');
	define('CONF_PATH','config/');
	define('PAGES_URL','pages/');

	define('SITE_TITLE','Essencia do Prazer');
	define('SITE_URL','http://essenciadoprazer.com.br');
	define('THEME_URL','framework/template/default/');

	define('SOCIAL_FB','https://www.facebook.com/essenciadoprazer1?fref=ts');

	if($_SERVER['SERVER_NAME'] == 'dev.pauloxavier.com'){
		define("url","http://localhost/coming");
		define("db_table", "px_user");
		define("db_user","localhost");
		define("db_name","sharemail");
		define("db_login","root");
		define("db_password","");
		define('BASE_URL','http://dev.pauloxavier.com/shareMail/');
		define('ST_PATH','http://'.$_SERVER['HTTP_HOST'].'/shareMail/framework/assets/');
	}


	else{
		define("url","http://www.essenciadoprazer.com.br");
		define("db_table", "px_user");
		define("db_user","mysql");
		define("db_name","u527900266_share");
		define("db_login","u527900266_admin");
		define("db_password","over5574");
		define('BASE_URL','http://www.essenciadoprazer.com.br/');
		define('ST_PATH','http://'.$_SERVER['HTTP_HOST'].'/framework/assets/');
	}
?>