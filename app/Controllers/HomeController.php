<?php

namespace App\Controllers;

class HomeController extends AbstractController
{
    /**
     * @return string
     * @throws \Exception
     * @throws \SmartyException
     */
    public function index()
    {
        $id = 383;

        return $this->view
            ->template('home/index.tpl')
            ->with([
                'id' => $id,
            ])
            ->display();
    }
}