<?php 

   require "includes/db.php";
    //получаем пользователя

    $id = $_GET["id"];
    $user = R::load('users',$id);

?>
 
<form action="includes/save.php" method="post">
<input type="hidden" name="id"value="<?= $post["id"] ?>">
<p>Name</p>
<input type="text" name="name"  value="<?= $user["name"] ?>">
<p>Login</p>
<input type="text" name="login" value="<?= $user["login"] ?>">
<p>email</p>
<input type="email" name="email"  value="<?= $user["email"] ?>">
<p>password</p>
<input type="password" name="password" value="<?= $user["password"] ?>">

<button type="submit">Сохранить</button>
</form>