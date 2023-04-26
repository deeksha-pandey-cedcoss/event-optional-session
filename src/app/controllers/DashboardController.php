<?php

use Phalcon\Mvc\Controller;

// defalut dashboard controller view

class DashboardController extends Controller
{
    public function indexAction()
    {
        echo $this->tag->linkTo(['logout', 'Logout', 'class' => 'btn btn-primary']);
        echo "<br>";
        echo $this->tag->linkTo(['/', 'Go back', 'class' => 'btn btn-primary']);
    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('login/index');
    }
}
