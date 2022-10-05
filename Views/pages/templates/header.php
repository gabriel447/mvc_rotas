<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo self::titulo ?></title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Danki Code</h2>
            </div>
            <nav class="menu">
                <?php

                foreach ($this->menuItems as $key => $value) {
                    echo '<a href="' . INCLUDE_PATH . strtolower($value) . '">' . $value . '</a>';
                }

                ?>
            </nav>
            <div class="clear"></div>
        </div>
    </header>