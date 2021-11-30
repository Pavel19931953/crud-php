<?php

require "includes/db.php";
//RedBeanPhp(лучшее взаимодействие с баззой данными) библиотека и защита даных от SQL иньекций

//выводим данные из таблицы

  $users = R::findAll('users');


        
 
 ?>

<form action="includes/add.php" method="post">
<p>Name</p>
<input type="text" name="name">
<p>Login</p>
<input type="text" name="login">
<p>email</p>
<input type="email" name="email">
<p>password</p>
<input type="password" name="password">

<button type="submit">Отправить</button>
</form>



<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>

<table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Login</th>
            <th>email</th>
           
        </tr>

        <?php 
        foreach($users as $user) {
            ?>
            <tr>
            <td><?=$user["id"] ?></td>
            <td><?=$user["name"] ?></td>
            <td><?=$user["login"] ?></td>
            <td><?=$user["email"] ?></td>
            <td><a href="user.php?id=<?= $user["id"] ?>">Открыть</a></td>
            <td><a href="edit.php?id=<?= $user["id"] ?>">Изменить</a></td>
            <td><a href="delete.php?id=<?= $user["id"] ?>">Удалить</a></td>
           
        </tr>
       
        <?php
        
        }
?>
</table>
       
    


 