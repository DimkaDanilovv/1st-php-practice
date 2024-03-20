<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <title>Pop it MVC</title>
</head>
<body class=''>
<div class="d-flex">
   <nav class="">
       <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
       <?php
       if (app()->auth::check()):
           ?>
               <?php if (app()->auth::user()->check): ?>
                       <span>Общие функции</span>
                       <a class="flex" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                   <?php elseif (app()->auth::user()->link_to_the_role == 3): ?>
                       <span>Для сотрудников отдела кадров</span>
                       <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
                       <a href="<?= app()->route->getUrl('/add_new_employee') ?>">Добавить нового сотрудника</a>
                       <a href="<?= app()->route->getUrl('/colculate_compos') ?>">Подсчет состава</a>
                       <a href="<?= app()->route->getUrl('/department_sel') ?>">Выбор подразделения</a>
               <?php elseif (app()->auth::user()->link_to_the_role == 1): ?>
                       <!-- <span>Для администратора</span> -->
                       <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
                       <a href="<?= app()->route->getUrl('/add_new_employee') ?>">Добавить нового сотрудника</a>
                       <a href="<?= app()->route->getUrl('/colculate_compos') ?>">Подсчет состава</a>
                       <a href="<?= app()->route->getUrl('/department_sel') ?>">Выбор подразделения</a>
                       <a href="<?= app()->route->getUrl('/tier') ?>">Прикрепить сотрудника</a>
                       <a href="<?= app()->route->getUrl('/Add_employee') ?>">Добавить сотрудника отдела кадров</a>
               <?php endif; ?>
           <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->login ?>)</a>
       <?php
       else:
           ?>
           <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
       <?php
       endif;
       ?>
   </nav>
</div>
<main>
   <?= $content ?? '' ?>
</main>

</body>
<style>
    header{
        background-color: white;
        padding: 10px 0;
    }
   a{
      color: black;
      margin-left: 25px;
   }
   .center{
    text-align: center;
    padding: 5px 10px;
    margin-top: 40px;
    background-color: white;
  }
  label{
   text-align: start;
  }
  .column{
   display: flex;
   flex-direction: column;
   gap:10px;
  }

  button:hover{
    background-color: grey;
  }

  .count_input{
    width: 40px;
    margin-left: 20px;
  }

  #department_button{
    width: 65px;
    margin-left: 20px;
  }

  #emp_button{
    width: 85px;
    margin-left: 20px;
  }

  .list_ul{
    text-align: start;
  }
   </style>
</html>