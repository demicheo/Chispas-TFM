<?php 
$active = 'participantes';
include('header.php'); 
?>

<section class="showcase d-flex justify-content-center align-items-center ">
    <img src="img/crescendo-showcase.jpeg" alt="fotografías cortos" class="img-showcase"> 

    <nav class="breadcrumbs container">
        <ul class="container d-flex">
            <li><a href="participantes.php">Cortos a concurso</a></li>
            <li><a class="link-migas" href="participantes.php">Drama</a></li>
            <li><a class="link-migas active" href="participantes-masinfo.php">Crescendo</a></li>
        </ul>

    </nav>
</section>

<section class="seccion-morada py-4">
    <div class="container">
        <div class=" row g-0 pb-4 justify-content-center">
            <div class=" info-principal justify-content-between align-items-center col-12 col-xl-8">
                <h1 class="titulo-1 mb-3">Crescendo</h1>
                <p class="parrafo-1 mb-4">En el corazón de una metrópolis vibrante, donde las luces de neón y los sonidos urbanos crean una sinfonía constante, la vida de cuatro desconocidos se entrelaza a través de la música.</p>
            </div>
            
            <div class="info-extendida d-flex flex-column flex-md-row col-10 px-4 py-2 justify-content-between align-items-center col-xl-3 ms-xl-5 justify-content-md-center align-items-md-center">
                <ul class="mx-4">
                <li class="d-flex tarjeta-info mt-2 mb-2">Equipo:<p class="ps-2"> Terra</p></li>
                <li class="d-flex tarjeta-info mb-2">Género:<p class="ps-2"> Drama</p></li>
                <li class="d-flex tarjeta-info mb-2">Duración:<p class="ps-2"> 5 min.</p></li>
                </ul>

                <div class="d-flex flex-row flex-md-column align-content-end">    
                    <button onclick="irEntradas()"  class="boton fill-verde trailer"> 
                        <span class="flecha">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                <rect x="2.639" y="21.25" width="45" height="7.5" rx="3.75" ry="3.75" fill="inherit" stroke-width="0"/>
                                <rect x="27.335" y="15.947" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(25.229 -21.515) rotate(45)" fill="inherit" stroke-width="0"/>
                                <rect x="27.335" y="26.553" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(87.297 24.447) rotate(135)" fill="inherit" stroke-width="0"/>
                            </svg>
                        </span>
                        <span class="texto">Entradas</span> 
                    </button>
                    <button class="boton fill-negro trailer"> 
                        <span class="flecha">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                <rect x="2.639" y="21.25" width="45" height="7.5" rx="3.75" ry="3.75" fill="inherit" stroke-width="0"/>
                                <rect x="27.335" y="15.947" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(25.229 -21.515) rotate(45)" fill="inherit" stroke-width="0"/>
                                <rect x="27.335" y="26.553" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(87.297 24.447) rotate(135)" fill="inherit" stroke-width="0"/>
                            </svg>
                        </svg>
                        </span>
                        <span class="texto">Trailer</span> 
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="desplegable row g-0 align-items-center justify-content-center">
        <ul class="col-12 col-md-10">
            <li class="desplegable-elemento row g-0 align-items-center justify-content-center">
                <div class="desplegable-superior col-11 d-flex align-items-center justify-content-between">
                    <h6 class="titulo-6" >Equipo creativo</h6>
                    <button class="boton-desplegable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                            <rect x="16.148" y="15.947" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(21.952 -13.604) rotate(45)" fill="inherit" stroke-width="0"/>
                            <rect x="16.148" y="26.553" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(68.199 32.358) rotate(135)" fill="inherit" stroke-width="0"/>
                        </svg>
                    </button>
                </div>
                <ul class="info col-11 pt-2 d-none">
                    <li class="item-info d-flex mt-2">Directora: <p class="parrafo-6 ps-1"> Elisa Nieto</p></li>
                    <li class="item-info d-flex mt-2">Guionista: <p class="parrafo-6 ps-1"> Nico Miró</p></li>
                    <li class="item-info d-flex mt-2">Director de Fotografía: <p class="parrafo-6 ps-1">Martín López</p></li>
                    <li class="item-info d-flex mt-2">Director de Arte: <p class="parrafo-6 ps-1">Ana García</p></li>
                    <li class="item-info d-flex mt-2">Editor: <p class="parrafo-6 ps-1">Pablo Sánchez</p></li>
                    <li class="item-info d-flex mt-2">Diseñador de Sonido: <p class="parrafo-6 ps-1">Elena Martínez</p></li>
                    <li class="item-info d-flex mt-2">Compositor Musical: <p class="parrafo-6 ps-1">Javier Rodríguez</p></li>
                </ul>
            </li>

            <li class="desplegable-elemento desplazar row g-0 align-items-center justify-content-center">
                <div class="desplegable-superior col-11 d-flex align-items-center justify-content-between">
                    <h6 class="titulo-6">Inspiración</h6>
                    <button class="boton-desplegable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                            <rect x="16.148" y="15.947" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(21.952 -13.604) rotate(45)" fill="inherit" stroke-width="0"/>
                            <rect x="16.148" y="26.553" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(68.199 32.358) rotate(135)" fill="inherit" stroke-width="0"/>
                        </svg>
                    </button>
                </div>
                <p class="info parrafo-6 col-11 pt-2 d-none">
                    una simple chispa se convirtió en el hilo conductor de nuestra narrativa. Nos sumergimos en la dinámica de una metrópolis vibrante, donde las luces de neón parpadean como chispas y los sonidos urbanos crean una sinfonía única. La idea de explorar cómo la música puede tejer conexiones entre vidas aparentemente separadas surgió de esta metáfora de la chispa inicial, que enciende la creatividad y nos llevó a descubrir las historias entrelazadas de nuestros protagonistas.
                </p>
            </li>

            <li class="desplegable-elemento desplazar row g-0 align-items-center justify-content-center">
                <div class="desplegable-superior col-11 d-flex align-items-center justify-content-between">
                    <h6 class="titulo-6" >Palabras del equipo</h6>
                    <button class="boton-desplegable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                            <rect x="16.148" y="15.947" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(21.952 -13.604) rotate(45)" fill="inherit" stroke-width="0"/>
                            <rect x="16.148" y="26.553" width="22.5" height="7.5" rx="3.75" ry="3.75" transform="translate(68.199 32.358) rotate(135)" fill="inherit" stroke-width="0"/>
                        </svg>
                    </button>
                </div>
                <p class="info parrafo-6 col-11 py-2 mb-2 d-none">
                    Cuando comencé a trabajar en 'Crescendo', quería capturar la esencia de una ciudad llena de vida y energía, donde cada rincón tiene una historia que contar. Este corto es una celebración de esos encuentros inesperados que nos cambian para siempre. La música, como la ciudad, es un hilo conductor que nos conecta a todos, y espero que esta obra resuene en el corazón de nuestra audiencia tanto como lo hizo en el nuestro durante su creación. Elisa Nieto (Directora)
                </p>
            </li>
        </ul>
    </div>
</section>

<?php 
    include('interes.php'); 
    include('final-entradas.php'); 
    include('footer.php');
?>
