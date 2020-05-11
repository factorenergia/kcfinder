<?php namespace kcfinder\cms;

/** This file is part of KCFinder project
 *
 *   @desc CMS integration code: BolmerCMS
 *   @package KCFinder
 *   @version 3.12
 */
class BolmerCMS{
    protected static $authenticated = false;
    static function checkAuth() {
        $current_cwd = getcwd();
        if ( ! self::$authenticated) {
            define('BOLMER_API_MODE', true);
            define('IN_MANAGER_MODE', true);
            $init = realpath(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))))."/index.php");
            include_once($init);
            $type = getService('user', true)->getLoginUserType();
            if($type=='manager'){
                self::$authenticated = true;
                if (!isset($_SESSION['KCFINDER'])) {
                    $_SESSION['KCFINDER'] = array();
                }
                if(!isset($_SESSION['KCFINDER']['disabled'])) {
                    $_SESSION['KCFINDER']['disabled'] = false;
                }
                $_SESSION['KCFINDER']['_check4htaccess'] = false;
                $_SESSION['KCFINDER']['uploadURL'] = '/assets/';
                $_SESSION['KCFINDER']['uploadDir'] = BOLMER_BASE_PATH.'assets/';
                $_SESSION['KCFINDER']['theme'] = 'default';
            }
        }

        chdir($current_cwd);
        return self::$authenticated;
    }
}
\kcfinder\cms\BolmerCMS::checkAuth();