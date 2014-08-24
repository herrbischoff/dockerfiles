<?php
    echo "This is the MySQL container info:";
    echo "<br>";
    echo "<pre>";
    echo getenv("DB_1_PORT_3306_TCP_ADDR") . ":" . getenv("DB_1_PORT_3306_TCP_PORT");
    echo "</pre>";
