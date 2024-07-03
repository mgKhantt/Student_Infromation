<?php
    include "../helper/App.php";

    $app = new App();

    $roll= $_REQUEST['rollNumber'];
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phoneNumber'];
    $gmail = $_REQUEST['gmail'];

    $data = [];
    $data['Roll_Number'] = $roll;
    $data['Name'] = $name;
    $data['Phone_Number'] = $phone;
    $data['Gmail'] = $gmail;

    $app->insert('Student_Information', $data);
    $app->redirect("note-app/list.php");