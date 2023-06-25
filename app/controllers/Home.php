<?php

class home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        echo "this is the home controller";
    }

}

$home = new Home;
call_user_func_array([$home, 'index'], ['a'=>'something','b'=>'b someting']);