<?php

use Phalcon\Mvc\Controller;
// defalut controller view
class LogoutController extends Controller
{
    public function indexAction()
    {
        // version name and host name of configuration

        $this->session->destroy();

        $this->response->redirect('signup/index');
    }
}
