<?php
/*
Plugin Name: Image optimizer by Wenprise
Plugin URI: http://wpzhiku.com/
Description: 上传时自动压缩优化图片。
Version:            1.0.0
Author: 一刀
Author URI: https://www.wpzhiku.com
*/

define('IMAGE_OPTIMIZER_BY_WENPRISE_VERSION', '1.0.0');
define('IMAGE_OPTIMIZER_BY_WENPRISE_PATH', plugin_dir_path(__FILE__));
define('IMAGE_OPTIMIZER_BY_WENPRISE_URL', plugin_dir_url(__FILE__));

add_action('plugins_loaded', function ()
{
    require_once(IMAGE_OPTIMIZER_BY_WENPRISE_PATH . 'vendor/autoload.php');

    load_plugin_textdomain('image-optimizer-by-wenprise', false, dirname(plugin_basename(__FILE__)) . '/languages/');

    new \Wenprise\ImageOptimizer\Init();
});