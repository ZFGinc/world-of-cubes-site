<?php

if (isset($user)) {
    $conn = getPDO();
    $id = $user['id'];
    $sql = "SELECT id, icon, name, rating FROM maps WHERE author = " . $id;

    $result = $conn->query($sql); 


    if ($result->rowCount() > 0) {
        while ($map = $result->fetch(\PDO::FETCH_ASSOC)) {
            echo include __DIR__ . '/map/map_mini.php';
        }
        } else {
        echo '<p class="u-text u-text-default u-text-1">This user has not posted his maps</p>';
    }
}


?>