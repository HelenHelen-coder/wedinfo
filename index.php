<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flexboxgrid2@7.2.1/flexboxgrid2.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" href="http://fonts.cdnfonts.com/css/miama-nueva">
    <title>Наш день</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <?php
 
 
    $host = 'localhost';
    $user = 'root';
    $pass = '12345';
    $db_name = 'wedding';
    $link = mysqli_connect($host, $user, $pass, $db_name);
    if (!$link) {
        die("Не могу соединиться с БД. Код ошибки: " . mysqli_connect_error());  
    }
 
    if (isset ($_POST["name"]) && isset($_POST["drink"])) {
        $sql = 'INSERT INTO `categories` (`name`, `drink`, `wish`) VALUES (\''.$_POST["name"].'\',\''.$_POST["drink"].'\',\''.$_POST["wish"].'\');';
        $query = mysqli_query($link, $sql);
    }
 
    ?>



</head>

<body>
    <section class="section_1">
        <div class="main_container">

        </div>
    </section>

    <section class="section_2">
        <div class="main_container">

        </div>
    </section>

    <section class="section_3" style="justify-content:flex-start;">
        <div class="main_container">
            
                <div class="main_id">
                    <h1>
                        <p class="header" class="stl">Заполните, пожалуйста, форму</p></h1>

                        <form method="post" id="ajax_form" action="">
                            <div>
                                <p>
                                    <input type="text" name="name" placeholder="Имя Фамилия">
                                </p>

                                <p>
                                <div class="stl"><input class="stl" type="checkbox" name="drink" value="Вино белое">Вино
                                    белое<br></div>
                                <div class="stl"><input class="stl" type="checkbox" name="drink"
                                        value="Вино красное">Вино красное<br></div>
                                <div class="stl"><input class="stl" type="checkbox" name="drink"
                                        value="Шампанское">Шампанское<br></div>
                                <div class="stl"><input class="stl" type="checkbox" name="drink" value="Пиво">Пиво<br>
                                </div>
                                <div class="stl"><input class="stl" type="checkbox" name="drink" value="Водка">Водка<br>
                                </div>
                                <div class="stl"><input class="stl" type="checkbox" name="drink"
                                        value="Безалкогольные">Безалкогольные
                                    напитки<br></div>
                                <div class="stl"><input class="stl" type="checkbox" name="drink" value="rad1">Другое
                                    <input type="text" , name="1"><br></div>
                                </p>

                                <div class="stl"><input name="wish" type="text">Пожелания для молодоженов</input></div>
                                <input type="submit" id="btn" value="Отправить">
                            </div>
                        </form>
                        <div id="result_form"></div>

                    
                </div>

            
        </div>

    </section>
    <section class="section_4">
        <div class="main_container">

        </div>
    </section>
    <section class="section_5">
        <div class="main_container">

        </div>

    </section>
    <section class="section_6">
        <div class="main_container">

        </div>
    </section>


</body>

</html>
