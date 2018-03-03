<?php

namespace App\Controllers;

class Http404Controller extends AbstractController
{
    /**
     * @return string
     * @throws \Exception
     * @throws \SmartyException
     */
    public function index()
    {
        return $this->view
            ->template('errors/404.tpl')
            ->display();
    }
}