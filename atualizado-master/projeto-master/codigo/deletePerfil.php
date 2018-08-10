<?php

    require_once "modelos/crud_usuario.php";
    $id = $_GET['id'];
    $crud = new crud_usuario();
    $crud->excluir_usuario($id);
    header('Location: login.php');

 ?>