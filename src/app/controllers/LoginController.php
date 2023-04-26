<?php

use Phalcon\Mvc\Controller;
use Phalcon\Events\Manager as EventsManager;
use MyApp\handle\Aware;
// login controller
class LoginController extends Controller
{
    public function indexAction()
    {
        // default login view
        $eventsManager = new EventsManager();
        $component = new Aware();
        $component->setEventsManager($eventsManager);
        $eventsManager->attach(
            'testt',
            new Listner()
        );
        $component->process();
    }
    // login action page
    public function loginAction()
    {
        if ($this->request->isPost()) {
            $password = $this->request->getPost("password");
            $email = $this->request->getPost("email");
        }
        $success = Users::findFirst(array("email = ?0 password = ?1, bind" => array($email)));
        if ($success) {
            $this->view->message = "LOGIN SUCCESSFULLY";
            $eventsManager = new EventsManager();
            $component = new Aware();
            $component->setEventsManager($eventsManager);
            $eventsManager->attach(
                'test',
                new Listner()
            );
            $component->process();
            $this->response->redirect('dashboard/index');
        } else {
            $this->view->message = "Not Login succesfully ";
        }
    }
}
