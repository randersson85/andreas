<?php

require_once 'BaseController.php';

class IndexController extends BaseController {

    public function showStart() {
        $template = $this->templateEngine->loadTemplate('start.twig');
        $template->display(array(
            'qty' => $_SESSION['qty'],
        ));
    }

    public function nuke() {
        session_unset();
        session_destroy();
    }

    protected function initialize()
    {
        // Optional constructor
    }
}