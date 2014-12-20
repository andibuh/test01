

<?php
    date_default_timezone_set("Europe/Berlin");

    set_include_path( get_include_path().PATH_SEPARATOR.'./libs');
    require_once('libs/Smarty.class.php');
    if(!defined('REQUIRED_SMARTY_DIR')) define('REQUIRED_SMARTY_DIR','./');

    class TestProjektSmarty extends Smarty{

        function __construct(){
            parent::__construct();

            $this->template_dir = REQUIRED_SMARTY_DIR.'templates';
            $this->compile_dir   = REQUIRED_SMARTY_DIR.'templates_c';
            $this->config_dir    = REQUIRED_SMARTY_DIR.'configs';
            $this->cache_dir     = REQUIRED_SMARTY_DIR.'cache';
        }
    }
?>

