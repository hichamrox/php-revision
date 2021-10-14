<?php

namespace App\Controllers;

use App\App;
use Twig\Loader\FilesystemLoader;

class AbsController {
    private $twig;
    public function __construct() {
        $dir = App::getAppDir();
        $loader = new FilesystemLoader($dir.'/View/');
        $this->twig = new \Twig\Environment($loader);
    }

    protected final function view($tpl, $vars = []) {
        $template = $this->twig->load($tpl.".twig");
        $t = $template->render($vars);
        return $t;
    }
}