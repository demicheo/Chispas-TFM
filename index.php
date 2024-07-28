<?php 
$active = 'index';
include('header-home.php'); 
?>
    <div class="hero video-hero">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline class="bg-video">
            <source src="video/video-hero.mp4" type="video/mp4">
            Tu navegador no soporta vídeos en HTML5.
        </video>
        <div class="hero-content">
            <h1 class="hero-titulo">¡Málaga!</h1>
            <p>Nos vemos del 1 al 11 de agosto</p>
        </div>
    </div>

    <main>

        <section class="intro container-fluid seccion-verde">
            <div class="container intro-contenido d-flex flex-column  pb-4">
                <h2 class="titulo-1 mb-4">El festival de cortos que va a revolucionar Málaga</h2>
                <p class="parrafo-1 mb-4">El vibrante mundo del cine corto llega a Málaga de la mano del Reto de
                    Chispas. Durante el festival
                    disfrutaremos de ponencias, talleres, networking, y sobre todo: mucho cine. ¿Te lo vas a perder?</p>
                <a href="entradas.php" class="boton fill-negro mb-3">Comprar entradas</a>
                <a href="index.php" class="boton fill-morado ">Programación</a>
            </div>
        </section>

        <section class="festival container-fluid seccion-negra">
            <div class="container aqui py-4">
                <h2 class="titulo-2 mb-4">El Festival</h2>
                <p class="parrafo-1 mb-4">Sumérgete en un mundo de creatividad y pasión cinematográfica en nuestro festival, donde la innovación y la originalidad son los protagonistas. Descubre que se cuece en nuestra programación.</p>

                <!-- aqui van las cards -->
                <?php include('ponentes.php'); ?>

                <a href="index.php" class="boton fill-blanco mt-3">ver programación</a>
            </div>
        </section>

        <section class="container-fluid seccion-blanca pb-0 mb-0">
            <div class="container pt-4 pb-0 mb-0">
                <h2 class="titulo-2 mb-2">Cortos Exclusivos</h2>
                <p class="parrafo-1 mb-1">¡Tenemos en nuestro poder grandes proyectos y no podemos esperar a que los veas!  ¿Quieres conocer un poco más sobre los cortos que tendrás la posibilidad de juzgar?</p>
                <div class="desplegable container mt-4">
                    <article class="desplegable-item uno" id="itemDesplegable">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>Vídeo</h3>
                            <a href="participantes.php" class="enlace-desplegable">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <rect x="2.5" y="21.25" width="45" height="7.5" rx="3.75" ry="3.75" fill="inherit" stroke-width="0" class="uno"/>
                                    <rect x="13.75" y="10" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(38.75 -11.25) rotate(90)" fill="inherit" stroke-width="0" class="dos"/>
                                    <rect x="13.75" y="32.5" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(61.25 11.25) rotate(90)" fill="inherit" stroke-width="0" class="tres"/>
                                </svg>
                            </a>
                        </div>
                        <p class="mt-2 d-none">
                            El grupo de cortos grabados con ayuda de una cámara.
                        </p>
                    </article>

                    <article class="desplegable-item" id="itemDesplegable">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>Animación</h3>
                            <a href="participantes.php" class="enlace-desplegable">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <rect x="2.5" y="21.25" width="45" height="7.5" rx="3.75" ry="3.75" fill="inherit" stroke-width="0"/>
                                    <rect x="13.75" y="10" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(38.75 -11.25) rotate(90)" fill="inherit" stroke-width="0"/>
                                    <rect x="13.75" y="32.5" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(61.25 11.25) rotate(90)" fill="inherit" stroke-width="0"/>
                                </svg>
                            </a>
                        </div>
                        <p class="mt-2 d-none">
                            Los equipos que decidieron dejar su sudor animando estos maravillosos cortos.
                        </p>
                    </article>

                    <article class="desplegable-item" id="itemDesplegable">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>Stop Motion</h3>
                            <a href="participantes.php" class="enlace-desplegable">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <rect x="2.5" y="21.25" width="45" height="7.5" rx="3.75" ry="3.75" fill="inherit" stroke-width="0"/>
                                    <rect x="13.75" y="10" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(38.75 -11.25) rotate(90)" fill="inherit" stroke-width="0"/>
                                    <rect x="13.75" y="32.5" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(61.25 11.25) rotate(90)" fill="inherit" stroke-width="0"/>
                                </svg>
                            </a>
                        </div>
                        <p class="mt-2 d-none">
                            No sabemos si es locura o ambición lo que llevó a la creación de estos maravillosos cortos.
                        </p>
                    </article>

                    <article class="desplegable-item" id="itemDesplegable">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>Mixed Media</h3>
                            <a href="participantes.php" class="enlace-desplegable">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <rect x="2.5" y="21.25" width="45" height="7.5" rx="3.75" ry="3.75" fill="inherit" stroke-width="0"/>
                                    <rect x="13.75" y="10" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(38.75 -11.25) rotate(90)" fill="inherit" stroke-width="0"/>
                                    <rect x="13.75" y="32.5" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(61.25 11.25) rotate(90)" fill="inherit" stroke-width="0"/>
                                </svg>
                            </a>
                        </div>
                        <p class="mt-2 d-none">
                            ¿No sabes por qué decidirte? Mixed media lo tiene todo: collages, dibujos, vídeo, stop motion...
                        </p>
                    </article>
                </div>
                <a href="participantes.php" class="boton fill-morado arriba">ver todos</a>
            </div>
            
        </section>
        <div class="desplazar">
        <?php include('final-agenda.php'); ?>
        </div>
        <section class="container-fluid newsletter">
            <div class="mensaje">
            </div>
            <div class="container">
                <h3 class="pt-3 titulo-3">Newsletter</h3>
                <p class="my-2 parrafo-1">¿Quiéres estar al tanto de todas nuestras novedades? ¡Suscribete a nuestra newsletter y te enterarás antes que nadie!</p>

                <a href="#" class="boton ghost-blanco mb-4">Suscribirme a la Newsletter</a>
            </div>
        </section>

    </main>



<?php include('footer-home.php'); ?>