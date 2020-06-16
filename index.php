<?php

require_once 'app/core/Core.php';

require_once 'lib/database/Connection.php';
require_once 'app/controller/HomeController.php';
require_once 'app/controller/ErrorController.php';
require_once 'app/controller/PostController.php';
require_once 'app/controller/AboutController.php';
require_once 'app/controller/AdminController.php';


require_once 'app/model/Posts.php';
require_once 'app/model/Comments.php';

require_once 'vendor/autoload.php';

$template = file_get_contents('app/template/home.html');
$nav_bar = file_get_contents('app/view/struct_nav.html');

ob_start();

    $core = new Core;
    $core->start($_GET);
    $exit_data = ob_get_contents();

ob_end_clean();

$tpl_soon = str_replace("Aria Dynamic", $exit_data, $template);

echo $nav_bar;
echo $tpl_soon;