<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    //localserver
    define('DBNAME', 'mvc_db');
    define('DBUSER', 'root');
    define('DBHOST', 'localhost');
    define('DBPASSWORD', '');
    define('DBDRIVER', '');
    define('ROOT', 'http://localhost/Quick Programming/MVC/public');
} else {
    //online website
    define('DBNAME', 'posts');
    define('DBUSER', 'root');
    define('DBHOST', 'localhost');
    define('DBPASSWORD', '');
    define('DBDRIVER', '');
    define('ROOT', 'https://www.yourWebsite.com');
}
