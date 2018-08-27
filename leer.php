<?php
#Leemos y mostramos los chats
$file = file_get_contents("chat.txt");
print $file;