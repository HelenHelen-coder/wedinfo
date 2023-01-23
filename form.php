<?php
//ini_set('display_errors',1);
//error_reporting(E_ALL);


    /*$host = 'localhost';
    $user = 'root';
    $pass = '12345';
    $db_name = 'wedding';
    $link = mysqli_connect($host, $user, $pass, $db_name);
    
    
    if (!$link) {
        die("Не могу соединиться с БД. Код ошибки: " . mysqli_connect_error());
                
    }
    
    echo "Connectedsuccessfully";
    
    //$fio = $_POST['name'];
    //$rad = $_POST['drink'];
    //$field = $_POST['wish'];
    //$query = "INSERT INTO `categories` (`name`, `drink`, `wish`) VALUES ('$fio', '$rad', '$field')";
    
    $sql = mysqli_query($link, $query);

    if ($sql) {
       echo "New recordcreatedsuccessfully";
    } else {
       echo "Error: " . $query . "<br>" . $mysqli_error[$link];
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        
        $fio = $_POST['fio'];
        $rad = $_POST['rad'];
        $field = $_POST['field'];
        

        echo $hide."<br />", $send."<br />";
    }

    if (empty($_REQUEST['fio'])) {
        echo 'Заполните поле';
    } else {
        $fio = $_REQUEST['fio'];
    }

    mysqli_close($link);
    */
    ?>
