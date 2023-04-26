<?php
$this->session->destroy();
// cookies detroy
echo $this->tag->linkTo(['/', 'Go back', 'class' => 'btn btn-primary']); ?>
$this->response->redirect('login/index');