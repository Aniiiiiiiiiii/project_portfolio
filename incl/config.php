<?php
if (strpos($_SERVER['SERVER_NAME'], 'localhost') === FALSE) {
    define('BASE_URL', 'https://' . $_SERVER['SERVER_NAME']); // On Live Server
} else {
    define('BASE_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/internship4you'); // On Development server - Local WAMP
}
?>