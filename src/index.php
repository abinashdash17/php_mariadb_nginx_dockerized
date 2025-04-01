<?php
// setcookie('test_key', 'test_val', time() + 20, '/');
foreach ($_SERVER as $key => $value) {
    var_dump($key);
    var_dump($value);
    echo "<br>";
}
