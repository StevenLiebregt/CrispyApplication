<?php

namespace App\Controllers;

class ItemController extends AbstractController
{
    /**
     * @param $id
     * @return string
     * @throws \Exception
     * @throws \SmartyException
     */
    public function index($id = 0)
    {
        return $this->view
            ->template('item/index.tpl')
            ->with([
                'id' => $id
            ])
            ->display();
    }
}