<?php

namespace App\Controllers;

use StevenLiebregt\CrispySystem\Controllers\Controller;
use StevenLiebregt\CrispySystem\View\SmartyView;

abstract class AbstractController extends Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new SmartyView();
    }
}