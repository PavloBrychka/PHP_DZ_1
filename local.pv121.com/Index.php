<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--    //Підключення bootstrap css-->
    <link rel="stylesheet" href="/stylecss/bootstrap.min.css">
<!--    //Підключення style.css-->
    <link rel="stylesheet" href="/stylecss/style.css">
</head>
<body>
<!-- //Підключення файлів php
    //Підключеня Header-->

    <?php include($_SERVER['DOCUMENT_ROOT']."/header.php");?>
<!--//Підключення conection php-->

    <?php include($_SERVER['DOCUMENT_ROOT']."/conection.php");?>


    <main>
        <div class="container">
            <h1 class="text-center">Список категорій</h1>

<!--     //Кнопка для переходу на сторінку create php(сторінка GRUD - операцій)        -->
            <a href="/create.php" class="btn btn-success">Додати категорію</a>
<!-- //Створення голови таблиці           -->

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Фото</th>
                    <th scope="col">Навва</th>
                    <th scope="col">Опис</th>
                    <th scope="col">Дія</th>
                </tr>
                </thead>
                <tbody>

                <!--   // Витягування всіх данних з tbl_categories в змінну sql
                 //    Витягування Данних з Бази Данних в змінні-->
                <?php


                $sql = "Select * From tbl_categories";
                $command = $dbh->query($sql);

                foreach($command as $row)
                {

                    $name = $row["name"];
                    $image = $row["image"];
                    $description = $row["description"];

                    // Вивід данних в таблиці
                    echo"
                      <tr>
                    <td><img src='$image' width='50'/></td>
                    <td>$name</td>
                    <td>$description</td>
                    <td><a href='' class='btn btn-success'>Update</i></a>
                    <a href='Crud.php' class='btn btn-danger'>Delete</i></a>
                    </td>
                </tr>
                    ";
                }
                ?>

                </tbody>
            </table>
        </div>
    </main>

<!-- //Підключення bootstrap js-->

    <script src="/stylecss/bootstrap.bundle.min.js"></script>
</body>

</html>