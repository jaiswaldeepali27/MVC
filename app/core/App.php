<?php

class App 
{
    private function spliturl()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", $URL);
        return $URL;
    }

    public function loadcontroller()
    {
        $URL = $this->spliturl();
        $filename = "../app/controllers/".ucfirst($URL[0]).".php";
        if (file_exists($filename))
        {
            require $filename;
        }
        else
        {
            $filename = "../app/controllers/_404.php";
            require $filename;
        }
    }
}

