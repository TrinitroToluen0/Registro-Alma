<?php
##################################
#  Made By 「! mesi」##6751      #
##################################
require_once 'config.php';
require_once 'controllers/connection.php';
require_once 'utils/errorHandler.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explora el mundo de Dofus <?php echo $nombre_servidor; ?> con eventos especiales y misiones personalizadas. Lucha contra enemigos mientras te embarcas en aventuras.">
    <title>Dofus <?php echo $nombre_servidor;?> | Servidor privado</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="script.js" defer></script>
    <script src="https://kit.fontawesome.com/cdd884b3e5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
</head>
<body>
    <div class="video-container">
        <video autoplay loop muted class="video-background">
            <source src="assets/background.mp4" type="video/mp4" />
        </video>
    </div>
    <main class="container">
        <div class="welcome">
            <h1>¡Bienvenido a Dofus <?php echo $nombre_servidor; ?>!</h1>
            <div class="separator"></div>
            <p><?php echo $descripcion_servidor; ?></p>
        </div>
        <div class="content-container">
            <section class="content-card">
                <h2>Descarga el cliente</h2>
                <div class="separator"></div>
                <div class="flex">
                    <div class="downloads-section">
                        <div class="downloads-background"></div>
                        <div class="downloads">
                            <h3>Servidores de descarga</h3>
                            <a target="_blank" href="<?php echo $enlace_mediafire; ?>" class="download-btn mediafire">
                                <svg width="2250" height="1279" viewBox="-6.8887712 -3.69853465 81.96659882 46.80035628" xmlns="http://www.w3.org/2000/svg"><path d="m20.7 8.3a51.47 51.47 0 0 1 9.34 1c2.9.55 5.85 1.56 8.83 1.55 2.28 0 4.12-1.6 4.1-3.53s-1.85-3.57-4.17-3.56a13.35 13.35 0 0 0 -3.9.65c.33-.23.66-.47 1-.68a26.14 26.14 0 0 1 15.1-3.68c5.6.26 11.46 2 15.8 5.72a19.9 19.9 0 0 1 6.62 17.82 19.75 19.75 0 0 1 -12.17 15.07 24 24 0 0 1 -14.45.52c-6.2-1.58-11.64-5-17.48-7.54a46.86 46.86 0 0 0 -10.57-2.68h.05a9 9 0 0 0 4.1-.7c1.74-.83 1.73-2.83.83-4.3-1.07-1.73-3.23-2.44-5.1-3a24.36 24.36 0 0 0 -10-.48 15.06 15.06 0 0 0 -6.83 2.52 5.67 5.67 0 0 0 -1.8 2.2c3.08-8.53 9.2-7.57 13-9.9a2.16 2.16 0 0 0 -1.57-3.94 7.24 7.24 0 0 0 -2.92 1.46l-.85.65s3.04-5.17 13.04-5.17z" fill="#07f"/><path d="m23.64 23.78.06.06zm32.46-10.73c-4.08 0-5.76 2.57-10.18 5-7.65 4.18-12.2 2.4-12.2 2.62s3.1 1.53 10.7 5.22a27 27 0 0 0 11.73 3.15 8 8 0 1 0 0-16z" fill="#fff"/></svg>
                                <span>Mediafire</span>
                            </a>
				            <a target="_blank" href="<?php echo $enlace_drive; ?>" class="download-btn drive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2250" height="1279" viewBox="0 0 1443.061 1249.993"><path fill="#3777e3" d="M240.525 1249.993l240.492-416.664h962.044l-240.514 416.664z"/><path fill="#ffcf63" d="M962.055 833.329h481.006L962.055 0H481.017z"/><path fill="#11a861" d="M0 833.329l240.525 416.664 481.006-833.328L481.017 0z"/></svg>
                                <span>Drive</span>
                            </a>
                            <a target="_blank" href="<?php echo $enlace_mega; ?>" class="download-btn mega">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2250" height="1279" viewBox="119.5 239.5 721 721"><circle cx="480" cy="600" r="360.5" fill="#d31b00"/><path fill="#fff" d="M267 454h85l128 130 129-130h82v293h-86V577.25L500.334 682h-40.668L355 577.25V747h-88z"/></svg>
                                <span>Mega</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-description">
                        <h3>¿Como jugar en Dofus <?php echo $nombre_servidor;?>?</h3>
                        <p><b>Regístrate:</b> Para comenzar tu aventura en Dofus <?php echo $nombre_servidor;?> lo primero que debes hacer es registrarte creando una cuenta, puedes hacerlo en el formulario de la sección de abajo.</p>
                        <p><b>Instala el cliente:</b></p>
                        <ol>
                            <li>Descarga el cliente desde tu servidor de descargas preferido en esta sección.</li>
                            <li>Una vez terminada la descarga, busca en tu carpeta de descargas predeterminada el archivo llamado <?php echo $nombre_servidor;?>.exe</li>
                            <li>Ejecuta el archivo haciendo doble clic sobre él y espera a que se actualice el cliente.</li>
                        </ol>
                        <p><b>Inicia sesión:</b> Una vez terminada la instalación, debes iniciar sesión. ¡Solamente debes ingresar tus credenciales de inicio de sesión (Usuario y Contraseña) de la cuenta que acabas de crear y listo!</p>
                    </div>
                </div>
            </section>
            <section class="content-card">
                <h2>Regístrate</h2>
                <div class="separator"></div>
                <?php require_once 'controllers/register.php'?>
                <form class="registerForm" method="post" novalidate>
                    <div class="inputBox">
                        <input type="text" id="formAccount" name="formAccount" autocomplete="off" required>
                        <label for="formAccount">Usuario</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="formPseudo" name="formPseudo" autocomplete="off" required>
                        <label for="formPseudo">Apodo</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="formPassword" name="formPassword" autocomplete="off" required>
                        <label for="formPassword">Contraseña</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="formPasswordConf" name="formPasswordConf" autocomplete="off" required>
                        <label for="formPasswordConf">Confirmar contraseña</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="formEmail" name="formEmail" autocomplete="off" required>
                        <label for="formEmail">Correo electrónico</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="formQuestion" name="formQuestion" autocomplete="off" required>
                        <label for="formQuestion">Pregunta secreta</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="formResponse" name="formReponse" autocomplete="off" required>
                        <label for="formResponse">Respuesta secreta</label>
                    </div>
                    <button class="submitButton" name="register_validation" type="sumbit">Registrarse</button>
                </form>
            </section>
            <section class="content-card">
                <h2>Nuestro Discord</h2>
                <div class="separator"></div>
                <div class="flex">
                    <div class="ds-widget">
                        <iframe title="Unirse a nuestro servidor de Discord" src="<?php echo $widget_discord;?>" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>
                    <div class="card-description">
                        <h3>¡Te invitamos a unirte a nuestro servidor de Discord!</h3>
                        <p>Únete a otros jugadores apasionados que comparten el mismo interés y entusiasmo por el Dofus. Aquí encontrarás un lugar donde discutir estrategias, intercambiar consejos y encontrar compañeros de juego. Nuestro servidor de Discord es el punto de encuentro perfecto para conectarte con otros jugadores, participar en eventos especiales y recibir las últimas actualizaciones sobre el juego. Además, tendrás la oportunidad de interactuar directamente con nuestro equipo de desarrollo, quienes estarán encantados de responder a tus preguntas y escuchar tus comentarios.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-icons">
            <a title="Ve a nuestro Twitter" href="<?php echo $enlace_twitter;?>" class="icon-link">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a title="Ve a nuestro Instagram" href="<?php echo $enlace_instagram;?>" class="icon-link">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a title="Ve a nuestro Discord" href="<?php echo $enlace_discord;?>" class="icon-link">
                <i class="fa-brands fa-discord"></i>
            </a>
            <a title="Ve a nuestro Tik Tok" href="<?php echo $enlace_tiktok;?>" class="icon-link">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <a title="Ve a nuestro Facebook" href="<?php echo $enlace_facebook;?>" class="icon-link">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a title="Ve a nuestro WhatsApp" href="<?php echo $enlace_whatsapp;?>" class="icon-link">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
        <p class="footer-text">© 2023 Servidor <?php echo $nombre_servidor;?>. Todos los derechos reservados.</p>
    </footer>
</body>
</html>