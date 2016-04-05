<?php
/**
 * This file defines the Global Constants of the Application.
 * This file should be placed in the Root Directory of the Application
 * since it uses 'realpath(dirname(__FILE__))' pointing to the root.
 */

/********************** Application Configuration Constants ************************/

/*** define the site path ***/
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

define ('__GALLERY_ROOT', "galleria");
define ('__DESIGN_ROOT', "design");
define ('__THUMB_ROOT', "thumb");
define ('__THUMBNAIL_WIDTH_LIMIT', 200);
define ('__THUMBNAIL_HEIGHT_LIMIT', 200);


define ('__ENV', "LOCAL");

if(__ENV=="PRODUCTION"){

	define ('__WEB_ROOT', "");
	define ('__APPLICATION_NAME', "Authentic Stones");
	
	define ('__SERVER_NAME', "myapp.com"); // to be changed during deployment
	define ('__APPLICATION_URL', "http://".__SERVER_NAME);
	
	/**************************************************************************************/
	
	/********************** Database Constants ************************/
	define ('__MY_DB_HOST', "localhost");
	define ('__MY_DB_USER', "my_user");
	define ('__MY_DB_PSWD', "my_user_pass");
	define ('__MY_SCHEMA', "my_db");
	/******************************************************************/
	
	/********************** Mailing Constants ************************/
	define ('__MY_MAIL_NAME', __APPLICATION_NAME);
	define ('__MY_MAIL_ID', "devteam@myapp.com");
	define ('__MY_SMTP_HOST', "ssl://smtp.gmail.com");
	define ('__MY_SMTP_PORT', 465);
	define ('__MY_SMTP_AUTH', true);
	define ('__MY_SMTP_USER', "ju.manikandan@gmail.com");
	define ('__MY_SMTP_PSWD', "VEerabahu@007");
	/******************************************************************/
	
} else {
	define ('__WEB_ROOT', "");
	define ('__APPLICATION_NAME', "Authentic Stones");
	
	define ('__SERVER_NAME', "localhost"); // to be changed during deployment
	define ('__APPLICATION_URL', "http://".__SERVER_NAME);
	
	/**************************************************************************************/
	
	/********************** Database Constants ************************/
	define ('__MY_DB_HOST', "localhost");
	define ('__MY_DB_USER', "my_user");
	define ('__MY_DB_PSWD', "my_user_pass");
	define ('__MY_SCHEMA', "my_db");
	/******************************************************************/
	
	/********************** Mailing Constants ************************/
	define ('__MY_MAIL_NAME', __APPLICATION_NAME);
	define ('__MY_MAIL_ID', "devteam@myapp.com");
	define ('__MY_SMTP_HOST', "ssl://smtp.gmail.com");
	define ('__MY_SMTP_PORT', 465);
	define ('__MY_SMTP_AUTH', true);
	define ('__MY_SMTP_USER', "ju.manikandan@gmail.com");
	define ('__MY_SMTP_PSWD', "VEerabahu@007");
	/******************************************************************/
		
}


?>
