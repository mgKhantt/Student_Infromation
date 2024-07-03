<?php
    include "../helper/App.php";

    $app = new App();

    $id = $_REQUEST['id'];

    $rollNumber = $_REQUEST['rollNumber'];
    $name = $_REQUEST['name'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $gmail = $_REQUEST['student_gmail'];

    $data = [];
    $data['Roll_Number'] = $rollNumber;
    $data['Name'] = $name;
    $data['Phone_Number'] = $phoneNumber;
    $data['Gmail'] = $gmail;

    $condition = 'id = ' . $id;

    $app->updateData('Student_Information', $data, $condition);
    $app->redirect("/note-app/list.php");

    
    