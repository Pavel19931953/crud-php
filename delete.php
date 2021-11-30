
<?php
require "includes/db.php";


    //удаляем

    $id = $_GET["id"];
    $user = R::load('users',$id);

    R::trash($user);
    header('Location: /');
