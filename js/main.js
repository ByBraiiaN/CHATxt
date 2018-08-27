$(document).ready(function(){
   setInterval(leer, 3000); 
});

var chat = $('#chat');
var msg = $('#mensaje');
var user = $('#user');

//Validamos datos
$('#enviar').click(function(){
    if(user.val() != "" && msg.val() != ""){
        escribir();
        msg.val("");
        user.prop('disabled', true);
    }else{
        alert("Campos vacios");
    }
})
//Cargamos el archivo leer.php para mostrar los chats    
function leer(){
    chat.load("leer.php");
}
//Enviamos usuario y mensaje por ajax
function escribir(){
    var msg = $('textarea').val();
    var user = $('#user').val();

    $.ajax({
        type: "POST",
        url: "escribir.php",
        data: {"mensaje":msg,"usuario":user},
        success:function(){                     
            leer();
            chat.scrollTop(chat[0].scrollHeight);
        }
    });  
}