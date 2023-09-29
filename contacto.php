<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Contacto</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.html" title="Vínculo a página Inicio" target="_blank">Inicio</a> 
            <a href="sobremi.html" title="Vínculo a página Sobre mí" target="_blank">Sobre mí</a>
            <img src="imagenes/LogoRV3.png" alt="Logo Desarrollo Web de Romina Valoriani">
            <a href="servicios.html" title="Vínculo a página Servicios" target="_blank">Servicios</a>
            <a href="contacto.html" title="Vínculo a página Contacto" target="_blank">Contacto</a>
        </nav>    
    </header>
    <main>
        <section id="contenido-contacto">
            <div class="contacto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7890.577955573646!2d-61.97202421110791!3d-33.745691723925525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c864b3247a525d%3A0x98c17493f380fdd2!2sVenado%20Tuerto%2C%20Santa%20Fe!5e0!3m2!1ses-419!2sar!4v1644017116528!5m2!1ses-419!2sar" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>           
            </div>
            <div class="contacto">
    <!-- respuesta del formulario -->
<?php
    //capturamos datos enviados por el formulario
    $nombre = $_POST['nombre'];
    $localidad = $_POST['localidad'];
    $email = $_POST['email'];
    $consultas = $_POST['consultas'];

    //configuramos datos de email a enviar
    $destinatario = 'pruebasprogramacion99@gmail.com';
    $asunto = 'Email enviado desde mi sitio';
    $cuerpo = '<div style="width:600px; padding:20px; font-family:verdana; background-color:#d5d5d5">';
    $cuerpo .= 'Nombre: ' . $nombre . '<br>';
    $cuerpo .= 'Localidad: ' . $localidad . '<br>';
    $cuerpo .= 'Email: ' . $email . '<br>';
    $cuerpo .= 'Consultas: ' . $consultas;
    $cuerpo .= '</div>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";

    //enviamos email
    mail($destinatario, $asunto, $cuerpo, $headers);

    //imprimimos mensaje personalizado
    echo 'Gracias ' . $nombre . ' por contactarnos';
?>









            </div>      
        </section>
    </main>
    <footer>
        <section class="cuadros">
            <div class="logo">
                <img src="imagenes/LogoRV3.png" alt="Logo Desarrollo Web de Romina Valoriani">        
            </div>
        </section>
        <section class="texto-imagenes">
            <div class="texto">
                <h3>Romina Valoriani</h3>
                <p>Desarrollo Web</p>
            </div>
            <div class="social">
                <a href="#" target="_blank">
                    <img src="imagenes/instagram.png" alt="Vínculo a instagram">
                <a href="#" target="_blank">
                    <img src="imagenes/facebook.png" alt="Vínculo a facebook">
            </div>
            <hr>
            <div class="condiciones-de-uso">
                <nav>
                    <a href="">Aviso legal</a>  
                    <a href="">Coondiciones de uso</a>         
                </nav>
            </div>
        </section>
        <section class="contacto">
            <h4>Contacto:</h4>
            <p>Teléfono:   
                <a href="callto:5493462279635">03462- 15279635</a> 
            <br>
            Correo electrónico: 
                <a href="mailto:desarrollowebrv@gmail.com">desarrollowebrv@gmail.com</a>   
            </p>
        </section>
        <section class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=" target="_blank">
                <img id="img-wsp" src="Imagenes/WhatsApp.png">
            </a>
        </section>
    </footer>
</body>
</html>