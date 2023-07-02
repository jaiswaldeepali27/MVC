<?php

class home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        echo "this is the home controller";

        $this->view('home');
    }

}

