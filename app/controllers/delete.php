<?php
    include "../helper/App.php";

    $app = new App();
    $id = $_REQUEST['id'];

    print_r($id);
    $app->delete('Student_Information', 'where id = ' . $id);
    $app->redirect('note-app/list.php');