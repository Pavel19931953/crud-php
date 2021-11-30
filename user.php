<?php

require "includes/db.php";
//ищем одного пользователя поиск
$id = $_GET["id"]; // по айдишнику
//помещаем пользователя в юзер которого нашли
$user = R::Load('users',$id);

//если нашего юзера не существует то выведем

  if(!$user){

    echo '<h1>404 Пользователь не найден</h1>';
    die();


  }

?>

   <h1>Добро пожаловать ,<?php echo $user["name"] ?></h1>
   <h3>Логин,<?php echo $user["login"] ?></h3>
   <h3>Email:<?php echo $user["email"] ?></h3>

   <a href="index.php"><h3>Выход</h3></a>