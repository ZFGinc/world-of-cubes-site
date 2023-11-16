<?php

require_once __DIR__ . '/../helpers.php';

// Выносим данных из $_POST в отдельные переменные

$iconPath = null;
$archivePath = null;
$name = $_POST['name'] ?? null;
$description = $_POST['decription'] ?? null;
$icon = $_FILES['icon'] ?? null;
$archive = $_FILES['archive'] ?? null;
$author = $_POST['userid'] ?? null;
$rating = 0;

// Выполняем валидацию полученных данных с формы

if (empty($name)) {
    setValidationError('name', 'Неверное имя');
}

if (!empty($icon)) {
    $types = ['image/jpeg', 'image/png'];

    if (!in_array($icon['type'], $types)) {
        setValidationError('icon', 'Иконка карты имеет неверный тип');
    }

    if (($icon['size'] / 5000000) >= 1) {
        setValidationError('icon', 'Иконка должна быть меньше 5 мб');
    }
}

if (!empty($archive)) {
    $types = ['application/x-zip-compressed', 'application/zip'];
    
    if (!in_array($archive['type'], $types)) {
        setValidationError('archive', 'Карт имеет неверный тип (нужен zip)');
    }

    if (($archive['size'] / 50000000) >= 1) {
        setValidationError('archive', 'Карта должна весить меньше 50 мб');
    }
}

// Если список с ошибками валидации не пустой, то производим редирект обратно на форму

if (!empty($_SESSION['validation'])) {
    setOldValue('name', $name);
    setOldValue('description', $description);
    setOldValue('icon', $icon);
    setOldValue('archive', $archive);
    redirect('/upload_map.php');
}

//  Загружаем аватарку и карту, если они были отправлены в форме

if (!empty($icon)) {
    $iconPath = uploadFile($icon, 'icon_map');
}

if (!empty($archive)) {
    $archivePath = uploadFileMap($archive, 'map');
}

$pdo = getPDO();

$query = "INSERT INTO maps (name, icon, description, archive, raiting, author) VALUES (:name, :icon, :description, :archive, :rating, :author)";

$params = [
    'name' => $name,
    'icon' => $iconPath,
    'description' => $description,
    'archive' => $archivePath,
    'rating' => $rating,
    'author' => $author
];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/');
