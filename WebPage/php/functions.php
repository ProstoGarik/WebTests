<?php
function checkValidEmail($email) {

    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';


    if (preg_match($pattern, $email)) {
        return true; 
    } else {
        return false;
    }
}

function checkValidPassword($password) {

    if (strlen($password) >= 6) {
        return true; 
    } else {
        return false;
    }
}

function checkValidAcctype($accountType) {

    if (isset($accountType)){
        return true;
    }
    else{
        return false;  
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';
    $accountType = $_POST["account-type"] ?? '';


    if (checkValidEmail($email)) {
        echo "Почта валидна: $email<br>";
    } else {
        echo "Ошибка в почте: $email<br>";
    }

    if (checkValidPassword($password)) {
        echo "Пароль валиден: $password<br>";
    } else {
        echo "Ошибка. Пароль должен состоять из минимум 6 символов: $password<br>";
    }

    if (checkValidAccType($accountType)) {
        echo "Тип аккаунта выбран";
    } else {
        echo "Ошибка. Не выбран тип аккаунта";
    }
}
?>