<?php
class Controller
{
    public function load_view($view_path)
    {
        require_once ROOT_PATH."/views/".$view_path."/index.php";
    }

}