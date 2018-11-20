<?php
/* ====================================================================================
   config.inc.php
   ------------------------------------------------------------------------------------
   This file must be included at the beginning of every PHP file!
   
   Define main path constants. All other path related constants defined in other files 
   are based on these constants.

   $local, when set to true, indicates we are working in a development environment and
   the path related constants are set accordingly.
*/
$local = true;

#
# Define BASE_PATH
#
$tmp = explode(DIRECTORY_SEPARATOR, __DIR__);
unset($tmp[count($tmp)-1]);
define('BASE_PATH', implode(DIRECTORY_SEPARATOR, $tmp) . DIRECTORY_SEPARATOR);
define('WEB_PATH', BASE_PATH . 'public_html/');
define('WEB_URL', webRoot() . "FalconMusic/public_html/");
#
# Set PHP configuration options
define('CLASS_ROOT', BASE_PATH . 'public_html/class/');
#
# Set common constants
define('PRIVATE_PATH', BASE_PATH . 'private_html/');
#
# Set Smarty constants
define('SMARTY_ROOT', WEB_PATH . 'Smarty-3.1.15/');
define('SMARTY_TEMPLATES', WEB_PATH . 'templates/');
define('SMARTY', SMARTY_ROOT . 'libs/Smarty.class.php');

/*
 * The following has been added to resolve the problem of relying on the system's timezone settings.
 */
date_default_timezone_set('America/New_York');

# Define the Smarty template/presentation framework.
/* ------------------------------------------------------------------------------------
 * This application uses Smarty, a template/presentation framework which can be
 * downloaded from www.Smarty.net
 */
require_once SMARTY;
$smarty = new Smarty;
$smarty -> setTemplateDir(SMARTY_TEMPLATES);
$smarty -> setCompileDir(SMARTY_ROOT . 'templates_c');
$smarty -> setCacheDir(SMARTY_ROOT . 'cache');
$smarty -> setConfigDir(SMARTY_ROOT . 'configs');
$smarty -> assign('WEB_URL', WEB_URL);

/* DEBUG *
echo BASE_PATH . "<br>";
echo WEB_PATH . "<br>";
echo WEB_URL . "<br>";
echo PRIVATE_PATH . "<br>";
exit();
// */
/**
 * Compose the URL that originated this script. This function was procured from
 * http://stackoverflow.com/questions/6768793/get-the-full-url-in-php and was reduced
 * by removing unnecessary items.
 * @return string the URL of the server running this script.
 */
function webRoot() {
    $ssl = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? true : false;
    $sp = strtolower($_SERVER['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $_SERVER['SERVER_PORT'];
    $port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
    $host = isset($host) ? $host : $_SERVER['SERVER_NAME'] . $port;
    $url_origin = $protocol . '://' . $host . $_SERVER['REQUEST_URI'];
    $ending = strpos($url_origin, "/", strpos($url_origin, "//") + 2);
    /*
     * if the URL exists on a localhost, it is highly likely that there is an alias
     * that needs to be kept as part of the URL. Otherwise, it is highly likely that
     * the base url is actually between the http:// and the next /. Actually, this is
     * changed for SymPRM since if it is running on Atlantis OR Camelot, the URL is
     * http://{server}/SymPRM/ therefore, we need to treat it the same as a localhost
     * version. Therefore, the if statement has been commented out.
     */
    //if (strpos($url_origin, "localhost") !== false) {
    $ending = strpos($url_origin, "/", $ending + 1);
    //}
    return substr($url_origin, 0, $ending + 1);
}