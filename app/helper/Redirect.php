<?php 
trait Redirect {
    public function redirect($path)
    {
        header('Location: http://localhost/Team-7/app/pages/' . $path);
    }
}