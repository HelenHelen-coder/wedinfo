<?php

if (isset($_POST["name"]) && isset($_POST["drink"]) && isset($_POST["wish"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"],
        'drink' => $_POST["drink"],
    	'wish' => $_POST["wish"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>