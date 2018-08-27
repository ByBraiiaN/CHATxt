<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Chat en Linea sin DB</title>
    
    <!-- CSS -->   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
   <section class="container">
       
       <header>
            <h1>CHATxt</h1>
            <h4>Chat en linea sin Base de Datos.</h4>
       </header>
       
       <div id="chat"></div>
       
        <input id="user" type="text" class="form-control" placeholder="Usuario">
        <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje.." maxlength="250"></textarea>
        <button id="enviar" class="btn btn-success">Enviar</button>
       
   </section>
    
    <!-- JSS -->  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>