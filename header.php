<?php
/*
 * This code was written by enotit.
 * distribution/modification/copying is free (but please mention me).
 * t.me/enotit 9.2022
 *
 */

?>


<head>

</head>
<body>
<div class="header_block">
    <div class="left_header_block header_part">
<!--        лево-->
    </div>
    <div class="center_header_block header_part">
        <a href="./"> Passing </a>
    </div>
    <div class="right_header_block header_part">
        <?
            if ($user->isAuth()) {
                echo "Войти";
            }
            else {
                echo "<b>Добро пожаловать,</b> " . ($user->getName()) . "!";
            }
        ?>
    </div>
</div>
</body>
