<?php

session_start();

require_once __DIR__ . '/config.php';

function redirect(string $path)
{
    header("Location: $path");
    die();
}

function setValidationError(string $fieldName, string $message): void
{
    $_SESSION['validation'][$fieldName] = $message;
}

function hasValidationError(string $fieldName): bool
{
    return isset($_SESSION['validation'][$fieldName]);
}

function validationErrorAttr(string $fieldName): string
{
    return isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}

function validationErrorMessage(string $fieldName): string
{
    $message = $_SESSION['validation'][$fieldName] ?? '';
    unset($_SESSION['validation'][$fieldName]);
    return $message;
}

function setOldValue(string $key, mixed $value): void
{
    $_SESSION['old'][$key] = $value;
}

function old(string $key)
{
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function uploadFile(array $file, string $prefix = ''): string
{
    $uploadPath = __DIR__ . '/../uploads';

    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $fileName = $prefix . '_' . time() . ".$ext";

    if (!move_uploaded_file($file['tmp_name'], "$uploadPath/$fileName")) {
        die('Ошибка при загрузке файла на сервер');
    }

    return "uploads/$fileName";
}

function uploadFileMap(array $file, string $prefix = ''): string
{
    $uploadPath = __DIR__ . '/../Maps';

    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $fileName = $prefix . '_' . time() . ".$ext";

    if (!move_uploaded_file($file['tmp_name'], "$uploadPath/$fileName")) {
        die('Ошибка при загрузке файла на сервер');
    }

    return "Maps/$fileName";
}

function setMessage(string $key, string $message): void
{
    $_SESSION['message'][$key] = $message;
}

function hasMessage(string $key): bool
{
    return isset($_SESSION['message'][$key]);
}

function getMessage(string $key): string
{
    $message = $_SESSION['message'][$key] ?? '';
    unset($_SESSION['message'][$key]);
    return $message;
}

function getPDO(): PDO
{
    try {
        return new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }
}

function findUser(string $email): array|bool
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}


function currentUser(): array|false
{
    $pdo = getPDO();

    if (!isset($_SESSION['user'])) {
        return false;
    }

    $userId = $_SESSION['user']['id'] ?? null;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $userId]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function getUser(int $id): array|false
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function getUserId(): int|false
{
    if (!isset($_SESSION['user'])) {
        return false;
    }

    return $_SESSION['user']['id'];
}

function getMap(int $id): array|false
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM maps WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function logout(): void
{
    unset($_SESSION['user']['id']);
    redirect('/');
}

function checkAuth(): bool
{
    if (isset($_SESSION['user']['id'])) {
        return true;
    }
    return false;
}

function checkGuest(): void
{
    if (isset($_SESSION['user']['id'])) {
        redirect('/user.php');
    }
}

function addMapRatingUserSend(int $idMap): void
{
    $user = currentUser();
    $pdo = getPDO();

    $arrayMaps = getMapRatingUserSend();
    array_push($arrayMaps, $idMap);

    $jsonarray = json_encode($arrayMaps);

    $update = "UPDATE users SET map_rating_send='$jsonarray' WHERE id=".$user['id'];
    $pdo->query($update);
}

function getMapRatingUserSend(): array
{
    $user = currentUser();

    if($user['map_rating_send'] == null) return array();

    $arrayMaps = json_decode($user['map_rating_send'], true);

    return $arrayMaps;
}

function hasMapRatingSend(int $idMap): bool
{
    $array = getMapRatingUserSend();

    if (in_array($idMap, $array)) {
        return true;
    }

    return false;
}