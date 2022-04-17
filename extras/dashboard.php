<?php

session_start();


if(isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
    echo "<h1>Welcome back ${name}</h1>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "<h1>Welcome guest</h1>";
    echo "<a href='/php-crash-course/13_sessions.php'>Home</a>";
}
