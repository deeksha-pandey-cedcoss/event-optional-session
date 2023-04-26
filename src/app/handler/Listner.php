<?php


use Phalcon\Di\Injectable;


class Listner extends Injectable
{
    public function sessionusage()
    {
        $di =$this->getDI();

        $this->session->set('email', $this->request->getPost('email'));
        $this->session->set('password', $this->request->getPost('password'));

        // print_r($this->session->get('email')); die;
    }
    public function sessionautofill()
    {
        $di =$this->getDI();
        $_POST['email']=$this->session->get('email');
        $_POST['password']=$this->session->get('password');
    }
}
