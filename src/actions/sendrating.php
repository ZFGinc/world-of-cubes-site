<?php

require_once __DIR__ . '/../helpers.php';

$id = $_GET['id'];
$star = $_GET['star'];
$user = $_GET['user'];

if(!hasMapRatingSend($id)){

    $conn = getPDO();
    $sql = "SELECT rating, count_rating_send FROM maps WHERE id = " . $id;

    $result = $conn->query($sql); 

    if ($result->rowCount() > 0) {
        while ($map = $result->fetch(\PDO::FETCH_ASSOC)) {
            $temp = $map['rating'] * $map['count_rating_send'];

            $newRatingCount = $map['count_rating_send']+1;
            $newRating = ( $temp + $star ) / $newRatingCount;

            $update = "UPDATE maps SET rating=$newRating WHERE id=$id";
            $conn->query($update);

            $update = "UPDATE maps SET count_rating_send=$newRatingCount WHERE id=$id";
            $conn->query($update);

            addMapRatingUserSend($id);
        }
    }

}