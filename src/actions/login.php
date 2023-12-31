<?php

require_once __DIR__ . '/../helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setOldValue('email', $email);
    redirect('/sign_in.php');
}

$user = findUser($email);

if (!$user) {
    setMessage('error', "Пользователь $email не найден");
    redirect('/sign_in.php');
}

if (!password_verify($password, $user['password'])) {
    setMessage('error', 'Неверный пароль');
    redirect('/sign_in.php');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/user.php');