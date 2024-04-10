<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Техника`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Техника</title>
</head>
<body>
<body background = "pic/4.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>ID Сотрудник</th>
      <th>Внешние повреждения</th>
      <th>Рабочее состояние</th>
      <th>Внутренний интерфейс</th>
      <th>Стабильная работа</th>
      </tr>
        <?php

            foreach($goods as $item)  {
                ?>
                <tr>
                <td><?php echo $item[0] ?></td>
                <td><?php echo $item[1] ?></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo $item[3] ?></td>
                <td><?php echo $item[4] ?></td>
                <td><?php echo $item[5] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить данные о технике</h2>
        <form action = "Update2.php" method="post">
            <p>ID Сотрудник</p>
            <input type = "text"  name = "IDСотрудник">
            <p>Внешние повреждения</p>
            <input type = "text"  name = "ВнешниеПовреждения">
            <p>Рабочее состояние</p>
            <input type = "text"  name = "РабочееСостояние">
            <p>Внутренний интерфейс</p>
            <input type = "text"  name = "ВнутреннийИнтерфейс">
            <p>Стабильная работа</p>
            <input type = "text"  name = "СтабильнаяРабота">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>