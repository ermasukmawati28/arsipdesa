<?php
session_start();
require_once "../model/m_user.php";
$crud = new m_user();

if (!empty($_POST)) {

    $query_result = $crud->create();
    if ($query_result === true) {
        $_SESSION['message'] = "Data berhasil di simpan";
        $_SESSION['message_type'] = "success";
        $crud->redirect_to("../index.php?page=user");
    } else {
        $_SESSION['message'] = $query_result;
        $crud->redirect_to("../index.php?page=user&aksi=add");
    }
}
