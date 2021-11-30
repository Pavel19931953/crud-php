<?php 
//база данных

require "rb.php";//подключение библиотеки

//подключаем базу данных через библиотеку
R::setup( 'mysql:host=localhost;dbname=rb',
'root', '' ); 