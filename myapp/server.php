<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alpha = $_POST['alpha'];
    $beta = $_POST['beta'];
    $gamma = $_POST['gamma'];

    file_put_contents('data.txt', "Alpha: $alpha, Beta: $beta, Gamma: $gamma\n", FILE_APPEND);
}
?>
