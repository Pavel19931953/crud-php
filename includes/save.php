<?php 
require "db.php";
// сохраняем изменные данные
$id = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password= $_POST['password'];

$user = R::load('users',$id);
$user["name"] = $name;
$user["login"] = $login;
$user["email"] = $email;
$user["password"] = $password;

R::store($user);//сохраняем
//h
header('Location: /');