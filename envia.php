<?php
    $remitente = $_POST['email'];
    $destinatario = 'andres.lagos@espoch.edu.ec';
    $asunto = 'Bienvenido a Code Helper';

    if(!$_POST){}
    
    else{
        $cuerpo="Nombre: ".$_POST['nombre']."\r \n";
        $cuerpo.="Apellido: ".$_POST['apellido']."\r \n"; 
        $cuerpo.="Teléfono: ".$_POST['telefono']."\r \n"; 
        $cuerpo.="Mensaje: ".$_POST['mensaje']."\r \n"; 

        $headers ="CH-version: 1.0\n";
        $headers .="Content-type: text/plain; charset=utf-8\n";
        $headers .="X-Priority 3\n";
        $headers .="X-MSMail-Priority:Normal\n";
        $headers .="X-Mailer:php\n";
        $headers .="From: \"".$_POST['nombre']."".$_POST['telefono']."\" <".$remitente.">\n";

        mail($destinatrio,$asunto,$cuerpo,$headers);

        echo "<script>
            if(confirm('¿Deseas Enviar?')){
                document.location='./';
            }else{
                alert('Operación Cancelada!')
                document.location='./';
            }
            </script>
        ";
    }
?>