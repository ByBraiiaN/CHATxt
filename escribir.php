<?php
#Leemos el archivo
$file = file_get_contents("chat.txt");
#Mensaje a agregar
$msg = "<b><big>" . $_POST['usuario'] . "</b></big> dice: " . $_POST['mensaje'] . "<br>";
#Agregamos el mensaje en el archivo
$file = file_put_contents("chat.txt", $file . $msg);